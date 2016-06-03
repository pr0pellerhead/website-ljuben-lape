<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 5/16/2016
 * Time: 6:07 PM
 */
?>
<style>
    .centered-form .panel{
        background: rgba(255, 255, 255, 0.8);
        box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
    }
</style>
<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Add new user<small></small></h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="controllers/korisnici_add.php" method="post">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="ime" id="first_name" class="form-control input-sm" placeholder="Name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input type="number" name="id_tip_korisnici" id="id_tip_korisnici" class="form-control input-sm" placeholder="1 or 2">
                                </div>
                            </div>
                        </div>

                        <input name="submit" type="submit" value="Add user" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
