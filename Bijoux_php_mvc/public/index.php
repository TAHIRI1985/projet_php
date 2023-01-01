<?php



require '../app/Autoloader.php';
App\Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}





ob_start();
if ($p === 'home') {

    require '../app/pages/home.php';
} elseif ($p === 'article') {
    require '../app/pages/article.php';
} elseif ($p === 'categorie') {
    require '../app/pages/categorie.php';
} elseif ($p === '404') {
    require '../app/pages/not_found.php';
}


$content = ob_get_clean();
require '../app/pages/templates/default.php';
