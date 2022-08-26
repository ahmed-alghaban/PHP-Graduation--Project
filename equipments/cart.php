<?php

	session_start();
	
	if(!isset($_SESSION['items'])){
		$_SESSION['items']=	array();
	}
	
	if(!isset($_SESSION['quntity'])){
		$_SESSION['quntity']=	array();
	}
	
	if( !in_array('3',$_SESSION['items']) ){
			array_push($_SESSION['items'],'3');
			array_push($_SESSION['quntity'],'9');
	}
	
	//array_push($_SESSION['items'],'3');
	
	if( !in_array('8',$_SESSION['items']) ){
			array_push($_SESSION['items'],'8');
			array_push($_SESSION['quntity'],'5');
	}
	
	//echo "<pre>";
	//print_r($_SESSION['items']);
	//echo "</pre>";
	
	//foreach($_SESSION['items'] AS $key=>$val){
	//	echo "the item ".$val." has quantity= ".$_SESSION['quntity'][$key]." <br>";
	//}
	
	session_destroy();
?>
