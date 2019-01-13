<?php
include('controleur/system_check.php');
$uri= $_SERVER['REQUEST_URI']; // /Code/LT1234/
$uri =trim($uri, '/');
$uri = explode('/', $uri);
if (isset($uri[1])) {
    $uri[1]=$uri[1];
}else{
    $uri[1]='home';
}
switch ($uri[1])
{
    case "index.php":
        $system->index(); 
        break;
    case "time":
        $system->time();
        break;
    case "cake":
        echo "i est un gateau";
        break;
    default:
         $system->index(); 
}
