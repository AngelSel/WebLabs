<?php
require_once 'D:/Ангелина/laba3/vendor/autoload.php';
Twig_Autoloader::register();

echo '<link rel="stylesheet" type="text/css" href="/00styles/style.css">';
echo '<link rel="stylesheet" type="text/css" href="addStyles/style-add.css">';
$pattern='/([a-zA-Z0-9_+.-]+)@([a-z.-]+)/';
$matches =[];
try {

    $loader = new Twig_Loader_Filesystem('../templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('add.tmpl');
    echo $template-> render(['title'=>'Dark Wood','name'=>'Share information']);

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}

if (isset($_POST['myButton']))
{   $n=" ";
    $text = $_POST['topic'];
    preg_match_all($pattern,$text,$matches);
    $text = preg_replace($pattern, " <a href='mailto:$0'style='color: red'>$0</a> ", $text);
    $fd = fopen("emails.txt", 'w') or die("не удалось открыть файл");
    foreach ($matches[0] as $m)
    {
        fwrite($fd, $m);
        fwrite($fd, $n);
    }

    fclose($fd);


}
?>
<div id="sm" class="article" style="width: 75%;margin-right:1px;margin-top:7%">
   <?php echo "$text"; ?>
</div>
