<?php 
include_once '../sys/controllers/db.php';

$query=$db->query('select * from strani where id_kategorija=4 order by id DESC limit 2');
$informacii=$query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($informacii);

$query=$db->query('select * from strani where id_kategorija=4 order by id DESC limit 4 offset 2'); // pocvi od id= 3 loadirAJ  4 NASLOVI
$naslovi=$query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($naslovi);



?>
