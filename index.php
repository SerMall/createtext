<?php
include_once('dbconnect.php') ;
$conndb = new mysqli('localhost', 'root', '1', 'codetest');
$link = mysql_connect('localhost', 'root', '1', 'codetest');

if (!$link) {
    echo 'Could not select database';
}
$page = 'home';
include_once('header.php') ;
include_once('middle-left.php') ;
include_once('middle-content.php') ;
include_once('footer.php') ;

?>