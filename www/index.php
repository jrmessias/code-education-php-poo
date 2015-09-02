<?php
$url = 'http://' . $_SERVER['HTTP_HOST'];

define('SITE_URL', $url);

define('WWW', __DIR__ . DIRECTORY_SEPARATOR);
define('SRC_DIR', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
define('CLASS_DIR', SRC_DIR);
define('AUTOLOAD', '../autoload.php');

include '../bootstrap.php';

$url = parse_url($url . $_SERVER['REQUEST_URI']);

$file = explode('/', ltrim($url['path'], '/'));

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    $pagina = (!isset($path[0]) || empty($path[0]) ? 'default' : $path[0]) . '.php';
    $arquivo = WWW . $pagina;
    if (file_exists($arquivo)) {
        require_once AUTOLOAD;
        include $arquivo;
    } else {
        http_response_code(404);
        echo '<h1>Página não encontrada - 404<h1>';
    }
}