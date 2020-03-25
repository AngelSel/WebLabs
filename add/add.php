<?php
require_once 'D:/Ангелина/laba3/vendor/autoload.php';
Twig_Autoloader::register();

echo '<link rel="stylesheet" type="text/css" href="D:/Ангелина/laba3/00styles/style.css">';
echo '<link rel="stylesheet" type="text/css" href="addStyles/style-add.css">';

try {

    $loader = new Twig_Loader_Filesystem('D:/Ангелина/laba3/templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('add.tmpl');
    echo $template-> render(['title'=>'Dark Wood','name'=>'Share information']);

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}