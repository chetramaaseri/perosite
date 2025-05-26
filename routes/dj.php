<?php

$host     = 'mysql';
$dbname   = 'pero';     // <-- change
$username = 'root';    // <-- change
$password = 'root';    // <-- change

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo "✅ Connected to DB: `$dbname`\n\n";

    // Step 1: Update the database charset and collation
    $pdo->exec("ALTER DATABASE `$dbname` CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;");
    echo "✅ Database charset changed to utf8mb4_unicode_ci\n\n";

    // Step 2: Get all tables
    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);

    foreach ($tables as $table) {
        echo "🔄 Processing table: `$table`\n";

        // Step 3a: Convert table collation
        $pdo->exec("ALTER TABLE `$table` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
        echo "   ✅ Table charset converted\n";

        // Step 3b: Convert text-based columns
        $columns = $pdo->query("
            SELECT COLUMN_NAME, COLUMN_TYPE, IS_NULLABLE, COLUMN_DEFAULT
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_SCHEMA = '$dbname'
              AND TABLE_NAME = '$table'
              AND DATA_TYPE IN ('char', 'varchar', 'text', 'tinytext', 'mediumtext', 'longtext')
        ")->fetchAll(PDO::FETCH_ASSOC);

        foreach ($columns as $column) {
            $name     = $column['COLUMN_NAME'];
            $type     = $column['COLUMN_TYPE'];
            $nullable = $column['IS_NULLABLE'] === 'YES' ? 'NULL' : 'NOT NULL';
            $default  = is_null($column['COLUMN_DEFAULT']) ? '' : "DEFAULT " . $pdo->quote($column['COLUMN_DEFAULT']);

            $sql = "ALTER TABLE `$table` 
                    MODIFY `$name` $type 
                    CHARACTER SET utf8mb4 
                    COLLATE utf8mb4_unicode_ci 
                    $nullable 
                    $default;";

            try {
                $pdo->exec($sql);
                echo "      ✅ Column `$name` converted\n";
            } catch (PDOException $e) {
                echo "      ❌ Column `$name` failed: " . $e->getMessage() . "\n";
            }
        }

        echo "\n";
    }

    echo "🎉 All tables, columns, and the database are now using utf8mb4_unicode_ci.\n";

} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage() . "\n";
}
