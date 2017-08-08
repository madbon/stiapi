<?php
require_once '../core/init.php';

if(Input::exists()){
    $user = DB::getInstance()->insert('tbl_rest_registration', array(
        'NAME'              =>  Input::get('Restname'),
        'OWNER'             =>  Input::get('ownername'),
        'CONTACT_INFO'      =>  Input::get('contactnumber'),
        'BLOG_WEB_URL'      =>  Input::get('blogweburl'),
        'HISTORY'           =>  Input::get('history'),
        'CAPACITY_CHAIRS'   =>  Input::get('capacityofchairs'),
        'COMP_ADDRESS'      =>  Input::get('completeaddress'),
        'LAT'               =>  Input::get('latitude'),
        'LONGI'             =>  Input::get('longitude'),
        'USERNAME'          =>  Input::get('username'),
        'PASSWORD'          =>  Input::encrptpw('password')

    ));
}
?>