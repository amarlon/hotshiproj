<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
function assets_url() {
    return base_url();
}


if ( ! function_exists('css_url'))

{

    function css_url($nom)

    {

        return base_url() . 'assets/css/' . $nom . '.css';

    }

}


if ( ! function_exists('js_url'))

{

    function js_url($nom)

    {

        return base_url() . 'assets/javacript/' . $nom . '.js';

    }

}


if ( ! function_exists('img_url'))

{

    function img_url($nom)

    {

        return base_url() . 'assets/images/' . $nom;

    }

}


if ( ! function_exists('img'))

{

    function img($nom, $alt = '')

    {

        return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';

    }

}

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
 