<?php
require_once '../vendor/autoload.php';
Twig_Autoloader::register();

echo '<link rel="stylesheet" type="text/css" href="/00styles/style.css">';
echo '<link rel="stylesheet" type="text/css" href="mysteriesStyles/style-mysteries.css">';

try {
    $dbh = new PDO('mysql:dbname=weblabs;host=localhost', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}

$sth = $dbh->prepare("SELECT * FROM `mysteries` ORDER BY `id`");
$sth->execute();
$array = $sth->fetchAll(PDO::FETCH_ASSOC);


try {
    $loader = new Twig_Loader_Filesystem('../templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('mysteries.tmpl');
    echo $template-> render(array('array'=>$array),['name'=>'Mysteries']);

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}