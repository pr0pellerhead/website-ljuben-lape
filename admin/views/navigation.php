<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 5/12/2016
 * Time: 8:13 PM
 */
?>
<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Ljuben Lape
                </a>
            </li>
            <li>
                <a href="?page=dashboard">Dashboard</a>
            </li>
            <li>
                <a href="?page=korisnici">Korisnici</a>
            </li>
            <li>
                <a href="?page=galerii">Galerii</a>
            </li>
<!--            <li class="dropdown">-->
<!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>-->
<!--                <ul class="dropdown-menu" role="menu">-->
<!--                    <li class="dropdown-header">Dropdown heading</li>-->
<!--                    <li><a href="#">Another action</a></li>-->
<!--                    <li><a href="#">Something else here</a></li>-->
<!--                    <li><a href="#">Separated link</a></li>-->
<!--                    <li><a href="#">One more separated link</a></li>-->
<!--                </ul>-->
<!--            </li>-->
            <li>
                <a href="?page=strani">Strani</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>

        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

