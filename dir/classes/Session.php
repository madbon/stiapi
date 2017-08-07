<?php 
/**
* 
*/
class Session 
{
	
	public static function setsession($sessname,$sessvalue){
		$_SESSION[$sessname] = $sessvalue;
	}

	public static function setsessarray($setsessarr=array()){
		for ($x = 0; $x <= 10; $x++) {
		  echo "The number is: $x <br>";
		}
	}

	public static function getsession($getsess){
		return $_SESSION[$getsess];
	}
}

 ?>