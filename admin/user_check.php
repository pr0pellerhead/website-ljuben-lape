<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 5/12/2016
 * Time: 7:53 PM
 */

session_start();
if(!isset($_SESSION['user'])){
    header('location:index.php');
}
