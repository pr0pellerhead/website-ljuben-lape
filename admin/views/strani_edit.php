
<style>
    h1{
        text-align: center;
    }
</style>
<meta charset="utf-8">
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
                        <form action="admin.php?page=strani_edit&id=<?php echo $id; ?>" method="post">
                            <div class="col col-xs-12">

                                <h3 class="panel-title">Ljuben Lape nova strana</h3>
                                <label for="">
                                    Naslov: <br>
                                    <input type="text" name="naslov" value="<?php echo $strana['naslov']; ?>" >
                                </label>
                                <br>
                                <label for="">
                                    Sodrzina <br>
                                    <textarea name="sodrzina" id="" cols="30" rows="10"><?php echo $strana['sodrzina']; ?></textarea>
                                </label> <br>
                                <label for="">
                                    Kategorii <br>
                                    <select name="id_kategorija" id="">
                                        <?php foreach($kategorii as $k){?>
                                            <option value="<?=$k['id'];?>" <?php echo $strana['id_kategorija'] == $k['id'] ? "selected" : ""; ?> ><?=$k['kategorija'];?></option>
                                        <?php } ?>
                                    </select>
                                </label>
                               

                            </div>
                            <div class="col col-xs-6 text-right">
                                <a href=""><button type="submit" class="btn btn-sm btn-primary btn-create" name="save">Зачувај</button></a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>