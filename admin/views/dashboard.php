<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h1>Dashboard</h1>
            <p>Hi <?=($_SESSION['user']['ime']);?></p>
           You logged in on:  <?php echo date("l, F j, Y, g:i:s A")."<br>"; ?>

        </div>
    </div>
</div>