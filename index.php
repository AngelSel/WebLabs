<?php
require_once 'vendor/autoload.php';
Twig_Autoloader::register();
echo '<link rel="stylesheet" type="text/css" href="00styles/style.css">';
echo '<link rel="stylesheet" type="text/css" href="mainStyles/style-unknown.css">';


try {

    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('mainPage.tmpl');
    echo $template-> render(['name'=>'Into the Unknown']);

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
