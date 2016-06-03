<?php
$dsn = 'mysql:dbname=skolo;host=127.0.0.1';
$username = 'root';
$password = '';
$db = new PDO($dsn, $username, $password);

if (isset($_GET['id'])) {

    $stmt = $db->prepare('select * from korisnici where id=:id');
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <form action="controllers/korisnici_edit.php" method="post">
        Име <br>
        <input type="text" name="ime" value="<?= $res[0]['ime'] ?>" required> <br>
        Емаил <br>
        <input type="email" name="email" value="<?php echo $res[0]['email']; ?>" required> <br>
        Пасворд <br>
        <input type="password" name="password" value="<?php echo $res[0]['password']; ?>" required><br/>
        Тип на корисник <br>
        <input type="number" name="id_tip_korisnici" value="<?php echo $res[0]['id_tip_korisnici']; ?>"
               required><br><br>
        <input type="hidden" name="id" value="<?= $res[0]['id'] ?>">
        <button type="submit" name="submit">Save</button>
    </form>
    <?php
}
