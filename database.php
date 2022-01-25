<?php
$url='127.0.0.1'; //commented for Docker
$username='root';
$password='root';
$conn=mysqli_connect($url,$username,$password,"employee"); //add db as 1st param for docker
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>