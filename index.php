<?php
define('ADMIN_FILES', '../pero/');
define('ADMIN_ASSET', 'http://localhost:4001/pero/');
// Error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_save_path('../sessions');
session_start();
$_SESSION['csrf_token'] ??= bin2hex(random_bytes(32));

// Autoload
require_once '../vendor/autoload.php';
require_once ADMIN_FILES.'functions/PeroAutoload.php';
require_once ADMIN_FILES.'functions/PeroHelpers.php';

use Illuminate\Database\Capsule\Manager as Capsule;
function loadEnvFiles($dir = 'config') {
    Dotenv\Dotenv::createImmutable(__DIR__)->load();
    foreach (glob("$dir/.env*") as $file) {
        Dotenv\Dotenv::createImmutable($dir, basename($file))->safeLoad();
    }
}
loadEnvFiles();
// Constants
define('BASE_URI', $_ENV['BASE_URI'] ?? ((isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']));
define('BASE_URL', rtrim(BASE_URI, '/') . '/');
define('ADMIN_ROUTE', $_ENV['ADMIN_ROUTE'] ?? '/admin');
define('ADMIN_URL', rtrim(BASE_URI, '/') . ADMIN_ROUTE . '/');

// Database setup
function setupDatabase() {
    if (!isset($_ENV['DB_DATABASE'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_HOST'])) {
        return null;
    }

    $db = new Capsule;
    $db->addConnection([
        'driver' => $_ENV['DB_DRIVER'] ?? 'mysql',
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'] ?? 3306,
        'database' => $_ENV['DB_DATABASE'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'charset'   => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
    ]);
    $db->setAsGlobal();
    $db->bootEloquent();
    return $db;
}
$db = setupDatabase();

// Get clean URI
$requestUri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$scriptName = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
if ($scriptName && $scriptName !== '/') {
    $requestUri = str_replace($scriptName, '', $requestUri);
}
$requestUri = $requestUri ?: '/';

// Static route map (only for hardcoded routes)
$staticRoutes = [
    ADMIN_ROUTE . '/auth' => ADMIN_FILES . 'auth/login.php',
    ADMIN_ROUTE . '/auth/login' => ADMIN_FILES . 'auth/login.php',
    ADMIN_ROUTE . '/auth/google-auth' => ADMIN_FILES . 'auth/google.php',
    ADMIN_ROUTE . '/access-denied' => ADMIN_FILES . 'auth/access_denied.php',
    ADMIN_ROUTE . '/auth/logout' => ADMIN_FILES . 'auth/logout.php',
    ADMIN_ROUTE => ADMIN_FILES . 'blogs/posts_list.php',
    ADMIN_ROUTE . '/dashboard' => ADMIN_FILES . 'blogs/posts_list.php',
    ADMIN_ROUTE . '/blogs/list' => ADMIN_FILES . 'blogs/posts_list.php',
    ADMIN_ROUTE . '/blogs/create' => ADMIN_FILES . 'blogs/posts_add.php',
    ADMIN_ROUTE . '/products' => ADMIN_FILES . 'clothcom/product_list.php',
    ADMIN_ROUTE . '/products/list' => ADMIN_FILES . 'clothcom/product_list.php',
    ADMIN_ROUTE . '/products/create' => ADMIN_FILES . 'clothcom/product_add.php',
    ADMIN_ROUTE . '/products/edit/variants' => ADMIN_FILES . 'clothcom/product_variants.php',
    ADMIN_ROUTE . '/products/create/boxes' => ADMIN_FILES . 'clothcom/product_boxes.php',
    ADMIN_ROUTE . '/orders/online' => ADMIN_FILES . 'orders/orders_list.php',
];
$meta;
PeroMeta::init();
// Static route check
if (isset($staticRoutes[$requestUri])) {
    require_once $staticRoutes[$requestUri];
    exit;
}

// File-based routing from /routes
function resolveRouteFile($uri) {
    $basePath = __DIR__ . '/routes' . ($uri === '/' ? '/home' : $uri);
    if (is_file($basePath . '.php')) {
        return $basePath . '.php';
    }
    if (is_file($basePath . '.html')) {
        return $basePath . '.html';
    }
    if (is_dir($basePath)) {
        if (is_file($basePath . '/home.php')) {
            return $basePath . '/home.php';
        }
        if (is_file($basePath . '/home.html')) {
            return $basePath . '/home.html';
        }
    }
    return null;
}

if ($routeFile = resolveRouteFile($requestUri)) {
    require_once $routeFile;
    exit;
}

// Dynamic route from DB
if ($db && $_ENV['PERO_BLOG'] == true) {
    $route = $db->table('dynamic_routes')->where('route', ltrim($requestUri, '/'))->first();
    if ($route) {
        if (!empty($route->redirect)) {
            $url = str_starts_with($route->redirect, 'http') ? $route->redirect : BASE_URL . ltrim($route->redirect, '/');
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: $url");
            exit;
        }
        $peroblog = new PeroBlog();
        if ($route->entity_type === 'post') {
            $post = $peroblog->getById($route->entity_id);
            if ($post) {
                require __DIR__ . '/post.php';
                exit;
            }
        }
        if ($route->entity_type === 'blog_category') {
            $currentPage = max((int)($_GET['page'] ?? 1), 1);
            [$posts, $currentPage, $totalPages, $perPage] = $peroblog->getAllByCategoryId($route->entity_id, $currentPage);
            $categories = $peroblog->getAllCategories();
            if ($posts) {
                require __DIR__ . '/blogs.php';
                exit;
            }
        }
    }
}

// 404 fallback
http_response_code(404);
require __DIR__ . '/404.php';
