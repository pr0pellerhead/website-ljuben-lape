<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 5/13/2016
 * Time: 12:01 PM
 */
$query=$db->query('select * from korisnici');
$res=$query->fetchAll(PDO::FETCH_ASSOC);