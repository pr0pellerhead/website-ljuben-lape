<?php
include_once '../sys/controllers/db.php';
$query=$db->query('select * from strani where id_kategorija=1 order by id DESC limit 3');
$res=$query->fetchAll(PDO::FETCH_ASSOC);

$query=$db->query('select * from strani where id_kategorija=1 order by id DESC ');
$all2=$query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($res);
?>