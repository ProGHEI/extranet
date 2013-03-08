<?php
$infos = $_GET["user"];
$param = $infos[0];
$url = 'test2/'.$param;
for ($i=1; $i<count($infos);$i++){
    $url = $url."+".$infos[$i];
}
header('Location: http://projetiti/drupal/'.$url);
?>