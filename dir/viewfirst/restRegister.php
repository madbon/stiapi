 <?php
require_once 'core/init.php';

// if(Input::exists(){
 	
 	
 	Input::get('Delicacy');
 	Input::get('Bestseller');
 	Input::get('Contactinfo');
 	Input::get('Compadd');
 	Input::get('Geolocation');

// }


echo $sample;


$user = DB::getInstance()->insert('tbl_rest_registration', array(
	'NAME' => Input::get('Restname'),
	'HISTORY' => Input::get('History'),
	'PHOTOS' => '',
	'DELICACY' => Input::get('Delicacy'),
	'BEST_SELLER' => Input::get('Bestseller'),
	'CONTACT_INFO' => Input::get('Contactinfo'),
	'COMP_ADDRESS' => Input::get('Compadd')
));


 ?>