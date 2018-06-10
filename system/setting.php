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
  
}   
$load = new Load();

