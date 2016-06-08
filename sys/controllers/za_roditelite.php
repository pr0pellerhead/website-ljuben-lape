<?php
include_once '../sys/controllers/db.php';
$query=$db->query('select * from strani where id_kategorija=3 order by id DESC limit 2');
$res3=$query->fetchAll(PDO::FETCH_ASSOC);
//var_dump($res3);
?>