<?php 
/* This file needs to be (git/svn) ignored to prevent being overwirtten */


define('MAINTENANCE'  , FALSE);
define('SHOW_PHP_INFO', FALSE);

//define the codeigniter system path if it is not within the project folder
$system_path = "";

//you can set or define below your other constants or paths required by the app






//---------------------------------------------------------------

/*
 *---------------------------------------------------------------
 * PHP INFO AND MAINTENANCE MODE
 *---------------------------------------------------------------
 */

 //display the different PHP settings defined on the server   
 if(SHOW_PHP_INFO) { php_info(); exit; }
 
 //Display a generic maintenance message
 if(MAINTENANCE) die('The site is under maintenance and is currently unavailable. Please try again later.');


/* End of file sys.php */
/* Location: ./sys.php */
