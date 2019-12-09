<?php
error_reporting(E_All);
ini_set('display_errors','on');
$db_host = 'localhost';
$db_user ='root';
$db_possword ='root';
$db_name ='site';
$db_port ='8889';
$link = mysqli_connect($db_host,$db_user,$db_possword,$db_name,$db_port);
if(!$link){
    exit( 'Error');
}

   

