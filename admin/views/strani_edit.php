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
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>

    tinymce.init({ selector:'textarea',

        height: 500,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: [
            '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>
<div class="container">
    <div class="row">
        <h1>Edit Strana</h1>

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <form action="controllers/strani.php" method="post" enctype="multipart/form-data">
                            <div class="col col-xs-12">

                                <h3 class="panel-title">Ljuben Lape nova strana</h3>
                                <label for="">
                                    Naslov: <br>
                                    <input type="text" name="naslov">
                                </label>
                                <br>
                                <label for="">
                                    Sodrzina <br>
                                    <textarea name="sodrzina" id="" cols="30" rows="10"></textarea>
                                </label> <br>
                                <label for="">
                                    Kategorii <br>
                                    <select name="id_kategorija" id="">
                                        <?php foreach($res_kategorii as $k){?>
                                            <option value="<?=$k['id'];?>"><?=$k['kategorija'];?></option>
                                        <?php } ?>
                                    </select>
                                </label>
                                <br>
                                <label for="">
                                    Golema slika <br>
                                    <input type="file" name="slika_golema">
                                </label>
                                <label for="">
                                    Mala slika <br>
                                    <input type="file" name="slika_mala">
                                </label>
                                <br>
                                <label for="">
                                    Galerija<br>
                                    <select name="id_galerija" id="">
                                        <?php foreach($res_galerii as $g){?>
                                            <option value="<?=$g['id'];?>"><?=$g['ime'];?></option>
                                        <?php } ?>
                                    </select>
                                </label>

                            </div>
                            <div class="col col-xs-6 text-right">
                                <a href=""><button type="submit" class="btn btn-sm btn-primary btn-create" name="save">Save</button></a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>