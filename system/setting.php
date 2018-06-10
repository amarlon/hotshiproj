<?php


class Load
{
    public function view($link)
    {
        return include('view/'.$link.'.php');
    }

    public function controleur($link)
    {
        return include('controleur/'.$link.'.php');
    }

    public function models($link)
    {
         return include('model/'.$link.'.php');
    }
    public function helpers($link)
    {
         return include('helpers/'.$link.'.php');
    }
    public function language($link)
    {    
         if($link=='En' or $link=='Fr' or $link=='Port' or $link=='Sp'){
             return include('Language/'.$link.'/'.$link.'.php');
         }else{
            return require('Language/En/En.php');
         }
         
    }
  
}   
$load = new Load();
$uri= $_SERVER['REQUEST_URI']; // /Code/LT1234/
$uri =trim($uri, '/');
$uri = explode('/', $uri);
if (isset($uri[1])) {
    $uri[2]=$uri[1];
}else{
    $uri[2]='En';
}

$load->language($uri[2]);





