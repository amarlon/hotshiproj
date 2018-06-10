<?php
$lang['start']="Start";
   



function line($language)
    {    
         if($link=='En' or $link=='Fr' or $link=='Port' or $link=='Sp'){
             return include('Language/'.$link.'/'.$link.'.php');
         }else{
            return require('Language/En/En.php');
         }
         
    }