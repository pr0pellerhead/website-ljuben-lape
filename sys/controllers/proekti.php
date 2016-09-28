<?php
include_once '../sys/controllers/db.php';
$query=$db->query("select * from strani where id_kategorija=2 order by id DESC limit 3");
$proekti=$query->fetchAll(PDO::FETCH_ASSOC);


$query=$db->query("select * from strani where id_kategorija=2 order by id DESC");
$all=$query->fetchAll(PDO::FETCH_ASSOC);

?>