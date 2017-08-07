<?php
require_once 'core/init.php';

// $user = DB::getInstance()->get('tbl_user_reservation', array('FULLNAME', '=', 'alex'));
 $user = DB::getInstance()->query("SELECT REST_ID, NAME,ICON, COMP_ADDRESS, LAT, LONGI FROM tbl_rest_registration");
// $user = DB::getInstance()->update('tbl_user_reservation',3, array(
// 	'FULLNAME' => 'MARK ',
// 	'EMAIL' => 'markangelo_bon@yahoo.com'
// ));

if (!$user->count()){
	echo 'No user';
} else
{
	foreach ($user->results() as $value) {

		// echo $user->FULLNAME
			$resarray[] = $value;
        
	}
	 $json_string = json_encode($resarray);
	 echo json_encode($resarray, JSON_PRETTY_PRINT);

        // $file = 'bon.json';
        // file_put_contents($file, $json_string);
}

// echo Config::get('basepath/domain_name'); // basepath




