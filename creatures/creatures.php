<?php
require_once 'D:/Ангелина/laba3/vendor/autoload.php';
Twig_Autoloader::register();
echo '<link rel="stylesheet" type="text/css" href="D:/Ангелина/laba3/00styles/style.css">';
echo '<link rel="stylesheet" type="text/css" href="creaturesStyles/style-creatures.css">';


try {
    $loader = new Twig_Loader_Filesystem('D:/Ангелина/laba3/templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('creatures.tmpl');
    echo $template-> render(['title'=>'Dark Wood','name'=>'Creatures','head1'=>'Brides','head2'=>'The Highest Spirit'
        ,'head3'=>'Lake Keeper','head4'=>'Lost Children','head5'=>'Mistresses of The Sea and The Moon']);

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}