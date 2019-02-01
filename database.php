<?php
$db_host='localhost';
$db_name='registration';
$db_user='root';
$db_pass='';

$mysqli=new mysqli($db_host,$db_user,$db_pass,$db_name);
if($mysqli->connect_error)
{
printf("Connection failed: \n",$mysqli->connect_error);
exit();
}