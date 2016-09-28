<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">

<?php


include 'user_check.php';

$controller='controller/dashboard.php';
$view='views/dashboard.php';

if(isset($_GET['page'])&& strlen($_GET['page'])>0){

    $controller='controllers/'.$_GET['page'].'.php';
    $view='views/'.$_GET['page'].'.php';
}
include 'views/navigation.php';

if(file_exists($controller)){
    include 'db.php';
    include $controller;
}
if(file_exists($view)){
    include $view;
}
?>


<!-- start: JavaScript-->
<script src="js/jquery-1.9.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

