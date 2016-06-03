<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 5/13/2016
 * Time: 11:55 AM
 */
?>
<style>
    h1{
        text-align: center;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<div class="container">
    <div class="row">
        <h1>KORISNICI</h1>

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Ljuben Lape</h3>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <a href="?page=korisnici_add"><button type="button" class="btn btn-sm btn-primary btn-create">Create New</button></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th><em class="fa fa-cog"></em></th>
                            <th class="hidden-xs">ID</th>
                            <th>Ime</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Tip korisnik</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($res as $row) { ?>
                            <tr>
                                <td align="center">
                                    <a href="?page=korisnici_edit&id=<?=$row['id']?>"
                                       class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    <a href="?page=korisnici_delete&id=<?=$row['id']?>"
                                       class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                </td>
                                <td class="hidden-xs"><?= $row['id']?></td>
                                <td><?=$row['ime']?></td>
                                <td><?=$row['email']?></td>
                                <td><?=$row['password']?></td>
                                <td><?=$row['id_tip_korisnici']?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-xs-4">Page 1 of 5
                        </div>
                        <div class="col col-xs-8">
                            <ul class="pagination hidden-xs pull-right">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                            <ul class="pagination visible-xs pull-right">
                                <li><a href="#">«</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>