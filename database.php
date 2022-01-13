<?php
$url='127.0.0.1';
$username='root';
$password='root';
$conn=mysqli_connect($url,$username,$password,"employee");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>