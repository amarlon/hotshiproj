<?php 

 class System
 {

    public function index(){
    	include('system/setting.php');
        $load->helpers('helpers');
    	$load->view('homev'); 
    }
     public function time(){
    	echo "sss";
    }
 } 
 $hotshi =new System();
