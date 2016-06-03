<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 5/13/2016
 * Time: 1:29 PM
 */
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/preview.css">

<div id="gallery">
    <button class="home"><a href="admin.php?page=galerija"><i class="fa fa-home"></i>Admin Panel</a></button>
    <div class="preview">
        <div class="preview-photo"></div>
    </div>


    <?php
    $imagesWithPath = array();
    $image_dir = "uploads/";
    $images = array_slice(scandir($image_dir), 2);
    foreach ($images as $key => $image) {
        $imagesWithPath[$key] = $image_dir . $image;
        echo "<img class='photo' onclick='showImg(this)' data-name='" . $image_dir . $image . "' src='" . $image_dir . $image . "'>";
    }
    ?>

    <script type="text/javascript">
        var primeImg = "<?php echo $imagesWithPath[0]; ?>";
        $(document).ready(function() {
            $('.preview-photo').css({'background-image': 'url('+primeImg+')'});
        });
        function showImg(img) {
            var imgVal = img.attributes['data-name'].value;
            $('.preview-photo').css({'background-image': 'url('+imgVal+')'});
        }

    </script>
</div>
