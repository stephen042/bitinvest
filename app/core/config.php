<?php

/**
 * data base config
 */
	define('APPNAME', 'coinbaseinvest');
	define('APPLOGO', '');
	define('APPEMAIL', 'mail@bitinvest.com');
	define('APPNUMBER', '09024452025');


/**
 * data base config
 */
if ($_SERVER['SERVER_NAME'] == "localhost") 
{
	//data base config for local server
	define('DBNAME', 'coinbaseInvest');
	define('DBPASS', '');
	define('DBDRIVER', 'mysql');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');

	// root for localHost
	define('ROOT','http://localhost/bitinvest/public');
}else{
	//data base config for live server
	define('DBNAME', 'coinbaseInvest');
	define('DBPASS', '');
	define('DBDRIVER', 'mysql');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	
	// root for liver server https://www.mywebsite.com 
	define('ROOT','https://');
}