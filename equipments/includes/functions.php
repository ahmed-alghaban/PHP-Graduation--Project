<?php

/*
	echo show_value ('cities',city_id,$row['city_id'],'title');
*/

function ArtoEnglishNumber($num){

$arr	=	array('9'=>'٩', '8'=>'٨', '7'=>'٧', '6'=>'٦', '5'=>'٥', '4'=>'٤', '3'=>'٣','2'=> '٢', '1'=>'١','0'=>'٠');	

	if(in_array($num,$arr))
		return array_search($num, $arr);
	else
		return 0;
}


function show_value ($table,$column,$value,$target){
global $connection;
$sql	=	"select $target from $table where $column='$value' ";
$result =	$connection->query($sql);
$row 	=	mysqli_fetch_assoc($result);
return $row[$target];
}

function edit_value($table,$baseColomn,$baseValue,$target,$newValue)
{
	global $connection;
	$sql	=	"update $table set $target='$newValue' where $baseColomn='$baseValue' ";
	$connection->query($sql);	
}


function remove_row($table,$baseColomn,$baseValue)
{
	global $connection;
	$sql	=	"delete from $table  where $baseColomn='$baseValue' ";
	$connection->query($sql);	
}


function count_available($item_id)
{
	global $connection;
	$sql	=	"SELECT sum(quantity) AS total FROM itemsforstore WHERE item_id = '$item_id'  ";
	$result	=	$connection->query($sql);	
	$row	=	mysqli_fetch_assoc($result);
	$total	=	(int)$row['total'];	
	return $total; 
}

function show_stores($item_id)
{
	global $connection;
	$sql	=	"SELECT * FROM itemsforstore WHERE item_id = '$item_id' GROUP BY store_id ORDER BY item_id ASC ";
	$result	=	$connection->query($sql);	
	while($row	=	mysqli_fetch_assoc($result))
		echo show_value ('stores','store_id',$row['store_id'],'name'). " "; 
}

function notifcation($store_id){
global $connection;
	$sql	=	"SELECT DISTINCT request_id FROM `requestitems` WHERE `store_id` = '$store_id' AND `status` = 'new'; ";
	$result	=	$connection->query($sql);
	$counter = 	$result->num_rows;
	if(isset($counter) AND $counter>=1 )
		return $counter;
	else 
		return 0;
}

function check_username($username){

global $connection;
	$sql	=	"SELECT * FROM administrator WHERE username = '$username' limit 1 ";
	$result	=	$connection->query($sql);		
	$counter = 	$result->num_rows;
	if(isset($counter) AND $counter==1)
		return TRUE;

	$sql	=	"SELECT * FROM stores WHERE username = '$username' limit 1 ";
	$result	=	$connection->query($sql);		
	$counter = 	$result->num_rows;
	if(isset($counter) AND $counter==1)
		return TRUE;	

	$sql	=	"SELECT * FROM clients WHERE username = '$username' limit 1 ";
	$result	=	$connection->query($sql);		
	$counter = 	$result->num_rows;
	if(isset($counter) AND $counter==1)
		return TRUE;	
	
	
	return FALSE;
		
}


function check_username_except($username,$row_id){


global $connection;
	$sql	=	"SELECT * FROM administrator WHERE username = '$username' AND admin_id='$row_id' limit 1  ";
	$result	=	$connection->query($sql);		
	$counter = 	$result->num_rows;
	if(isset($counter) AND $counter==1)
		return TRUE;

	$sql	=	"SELECT * FROM stores WHERE username = '$username' AND store_id='$row_id' limit 1 ";
	$result	=	$connection->query($sql);		
	$counter = 	$result->num_rows;
	if(isset($counter) AND $counter==1)
		return TRUE;	

	$sql	=	"SELECT * FROM clients WHERE username = '$username' AND client_id='$row_id' limit 1 ";
	$result	=	$connection->query($sql);		
	$counter = 	$result->num_rows;
	if(isset($counter) AND $counter==1)
		return TRUE;	
	
	
	return FALSE;
		
}


function login_admin($username,$password)
{
	global $connection;
	$sql	=	"SELECT * FROM `administrator` WHERE username ='$username' AND password='$password' LIMIT 1 ";
	$check = $connection->query($sql);
	$count = $check->num_rows;
	if(isset($count) AND $count==1){
		$row = mysqli_fetch_assoc($check);
		$_SESSION['ID'] 		= 	$row['admin_id'];
		$_SESSION['name'] 		= 	$row['name'];
		$_SESSION['password'] 	= 	$row['password'];
		$_SESSION['username'] 	= 	$row['username'];
		$_SESSION['login'] 		= 	"administrator";
		
		return TRUE;
	}else{
		
		return FALSE;
	}
}




function login_store($username,$password)
{
	global $connection;
	$sql	=	"SELECT * FROM `stores` WHERE username ='$username' AND password='$password' LIMIT 1 ";
	$check = $connection->query($sql);
	$count = $check->num_rows;
	if(isset($count) AND $count==1){
		$row = mysqli_fetch_assoc($check);
		$_SESSION['ID'] 		= 	$row['store_id'];
		$_SESSION['name'] 		= 	$row['name'];
		$_SESSION['password'] 	= 	$row['password'];
		$_SESSION['username'] 	= 	$row['username'];
		$_SESSION['login'] 		= 	"store";
		
		return TRUE;
	}else{
		
		return FALSE;
	}
}



function login_client($username,$password)
{
	global $connection;
	$sql	=	"SELECT * FROM `clients` WHERE username ='$username' AND password='$password' LIMIT 1 ";
	$check = $connection->query($sql);
	$count = $check->num_rows;
	if(isset($count) AND $count==1){
		$row = mysqli_fetch_assoc($check);
		$_SESSION['ID'] 		= 	$row['client_id'];
		$_SESSION['name'] 		= 	$row['name'];
		$_SESSION['password'] 	= 	$row['password'];
		$_SESSION['username'] 	= 	$row['username'];
		$_SESSION['login'] 		= 	"client";
		
		return TRUE;
	}else{
		
		return FALSE;
	}
}

?>
