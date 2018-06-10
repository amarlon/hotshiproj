<?php
include('controleur/hosthicheck.php');
$uri= $_SERVER['REQUEST_URI']; // /Code/LT1234/
$uri =trim($uri, '/');
$uri = explode('/', $uri);
if (isset($uri[1])) {
    $uri[1]=$uri[1];
}else{
    $uri[1]='hotshi';
}
switch ($uri[1])
{
    case "index.php":
        $hotshi->index(); 
        break;
    case "time":
        $hotshi->time();
        break;
    case "cake":
        echo "i est un gateau";
        break;
    default:
         $hotshi->index(); 
}