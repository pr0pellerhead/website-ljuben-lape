<?php 

$dsn='mysql:dbname=skolo;host=127.0.0.1';
$username='root';
$password='';
$db=new PDO($dsn,$username,$password);
$db->query('set names utf8');
 ?>