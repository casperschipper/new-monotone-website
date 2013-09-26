<?php

if(!$_POST['page']) die("0");

$page = $_POST['page'];
$page = str_replace('#','',$page);

$pageParsed = 'pages/'.$page.'.html';

if(file_exists('pages/'.$page.'.html'))
echo file_get_contents('pages/'.$page.'.html');

else echo 'There is no such page!';
?>
