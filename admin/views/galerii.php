<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/galerija.css">
<style>
    div.left{
        width: 40%;
    }
    .col-md-10{
        float: right;
        display: inline-block;
        width: 50%;
    }
</style>
<div class="container">
    <div class="row upload-section">
        <h1>Gallerii Panel</h1>
        <div class="left">
            <div class="upload-section">
                <div class="image"></div>
                <div class="choose-image">
                    <form action="controllers/galerii_add.php" method="post" enctype="multipart/form-data">
                       <span style="color:#ffffff">Enter Gallery Name: </span> <input type="text" name="ime" placeholder="Gallery Name" required>
                        <br><br>
                        <input  id="file" class="inputfile" type="file" name="sliki[]" multiple>
                        <label for="file"><i class="fa fa-upload"></i> Choose files...</label>
                        <button class="upload" type="submit" name="save" value="Save">Save</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Ljuben Lape Galerii</h3>
                        </div>
<!--                        <div class="col col-xs-6 text-right">-->
<!--                            <a href="?page=korisnici_add"><button type="button" class="btn btn-sm btn-primary btn-create">Create New</button></a>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th><em class="fa fa-cog"></em></th>
                            <th class="hidden-xs">id</th>
                            <th>ime</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($res as $row) { ?>
                            <tr>
                                <td align="center">
                                    <a  href="?page=galerii_edit&id=<?=$row['id']?>"
                                       class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    <a href="controllers/delete_galerii&id=<?=$row['id']?>"
                                       class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                </td>
                                <td class="hidden-xs"><?=$row['id']?></td>
                                <td><?=$row['ime']?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
