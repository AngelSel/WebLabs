<?php
require_once 'D:/Ангелина/laba3/vendor/autoload.php';
Twig_Autoloader::register();

echo '<link rel="stylesheet" type="text/css" href="/00styles/style.css">';
echo '<link rel="stylesheet" type="text/css" href="mysteriesStyles/style-mysteries.css">';


try {
    $loader = new Twig_Loader_Filesystem('../templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('mysteries.tmpl');
    echo $template-> render(['title'=>'Dark Wood','name'=>'Mysteries','head1'=>'The Holy Spirit Challenge',
        'head2'=>'Masters task','head3'=>'Apprentices funeral','head4'=>'Tattoo']);

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}