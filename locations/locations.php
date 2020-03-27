<?php
require_once 'D:/Ангелина/laba3/vendor/autoload.php';
Twig_Autoloader::register();
echo '<link rel="stylesheet" type="text/css" href="/00styles/style.css">';
echo '<link rel="stylesheet" type="text/css" href="locationsStyles/style-locations.css">';


try {
    $loader = new Twig_Loader_Filesystem('../templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('Locations.tmpl');
    echo $template-> render(['img1'=>'The Blood River','title'=>'Dark Wood','name'=>'Locations','img2'=>'The Village in The Woods',
        'img3'=>'The Forgotten Cemetry','img4'=>'The Cursed Forest','img5'=>'Bridge To The Unknown','img6'=>'The Holy Swamps']);

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}