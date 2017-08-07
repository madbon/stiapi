<?php
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'db' => 'stiapi_db'
		),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expirary' =>  604800
		),
	'session' => array(
		'session_name' => 'user'
			),
	'basepath' => array(
		'domain_name' => 'http://localhost/stiapi/dir/img'
		)
	);

spl_autoload_register(function($class){
    if (file_exists('classes/' .$class. '.php'))
    {
        require_once 'classes/' .$class. '.php';
    }else
    {
         require_once '../classes/' .$class. '.php';
    }
	

});

if (file_exists('functions/sanitize.php'))
{
    require_once 'functions/sanitize.php';
}
else
{
    require_once '../functions/sanitize.php';
}





// require_once 'classes/Config.php';
// require_once 'classes/Cookie.php';
// require_once 'classes/DB.php';