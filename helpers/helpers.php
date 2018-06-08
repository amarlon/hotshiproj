<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
  *@var insert ton url sur base_url
  *{ca permet de recevoir ton url, tu dois ecrire cela car c'est important}
*/
 $base_url = '';

function base_url() {
    return $base_url;
}

/**
  *@function le type la variable 
  *{css_url : pour le varible css , il suffit de mettre css_url('style') sans le css et lui meme va faire les chemin }
*/

if ( ! function_exists('css_url'))

{

    function css_url($nom)

    {

        return base_url() . 'assets/css/' . $nom . '.css';

    }

}

/**
  *@function pour javascript
  *{css_url : pour le varible css , il suffit de mettre css_url('script') sans le js et lui meme va faire les chemin }
*/

if ( ! function_exists('js_url'))

{

    function js_url($nom)

    {

        return base_url() . 'assets/javacript/' . $nom . '.js';

    }

}
/**
  *@function pour les images 
  *{css_url : pour le varible css , il suffit de le mettre dans les src en images lui meme il fera le chemein donc c est src= '<?php img_url()?> ' }
*/

if ( ! function_exists('img_url'))

{
    function img_url($nom)

    {
        return base_url() . 'assets/images/' . $nom;
    }

}

/**
  *@function pour les images 
  *{css_url : pour le varible css , il suffit de le mettre dans les src en images lui meme il fera le chemein donc c est src= '<?php img_url()?> ' il est indetique au premier mais unpeu different}
*/

if ( ! function_exists('img'))

{

    function img($nom, $alt = '')

    {

        return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';

    }

}
/**
  *@function pour le comptage du temps 
  * il sera utiliser apres ' }
*/


if(!function_exists('comptime')){
    function comptime($time){
        $old_date=strtotime($time);
        $dif=time()-$old_date;
        $hour=$dif/3600;
        if($hour<=24){
            if($hour>=1){
                $var = $hour;
                $whole = floor($var);     // 1
                $decimal = fmod($var, 1);
                return floor($hour).'h ';
            }
            else{
               if($dif>=60){
                   $min=$dif/60;
                   return floor($min).' min';
               }else{
                return $dif.' sec';
               }
            }
        }else{
            $day= $hour/24;
            if($day<2){
            $c='day';
            }else{
                 $c='days';
            }
            if($day>30){
                $month=$day/30;
                return floor($month). 'month';
            }else{
                return floor($day).' '.$c;
            }
        } 
    }
}
 