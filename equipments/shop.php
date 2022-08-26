<?php



function toEnglishNumber($num){

$arr	=	array('9'=>'٩', '8'=>'٨', '7'=>'٧', '6'=>'٦', '5'=>'٥', '4'=>'٤', '3'=>'٣','2'=> '٢', '1'=>'١','0'=>'٠');	

	if(in_array($num,$arr))
		return array_search($num, $arr);
	else
		return 0;
}


echo toEnglishNumber('٥');
?>
