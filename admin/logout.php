<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 5/12/2016
 * Time: 8:50 PM
 */
session_start();
if(session_destroy())
{
    header('location:index.php');
}
