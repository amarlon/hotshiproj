<?php 

 class System
 {

    public function index(){
    	include('system/setting.php');
        $load->helpers('helpers');
    	$load->view('hotshiv'); 
    }
     public function time(){
    	echo "sss";
    }
 } 
 $hotshi =new Hotshi();
