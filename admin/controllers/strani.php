<?php

$dsn='mysql:dbname=skolo;host=127.0.0.1';
$username='root';
$password='';

$db=new PDO($dsn,$username,$password);


$query=$db->query('select * from strani');
$res=$query->fetchAll(PDO::FETCH_ASSOC);

$query=$db->query('select * from kategorii');
$res_kategorii=$query->fetchAll(PDO::FETCH_ASSOC);

$query=$db->query('select * from galerii');
$res_galerii=$query->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['save'])){
 $upload_dir = "../uploads/";
       
        if($_FILES['slika_golema']['error']== 0 && $_FILES['slika_mala']['error']==0){
            $tmp_golema = $_FILES['slika_golema']['tmp_name'];
            $tmp_mala = $_FILES['slika_mala']['tmp_name'];

            $new_name_golema = rand(1000000, 9999999).'_'.$_FILES['slika_golema']['name'];
            $new_name_mala = rand(1000000, 9999999).'_'.$_FILES['slika_mala']['name'];

            $path_slika_mala =  $upload_dir.$new_name_mala;
            $path_slika_golema= $upload_dir.$new_name_golema;

            if(move_uploaded_file($tmp_golema, $path_slika_golema) && move_uploaded_file($tmp_mala,$path_slika_mala)){
                
                $query = $db->prepare('insert into strani (naslov,sodrzina,objavena_na,id_kategorija,id_galerija,slika_mala, slika_golema) values (:naslov, :sodrzina, now(), :id_kategorija, :id_galerija,:slika_mala, :slika_golema)');
                $query->bindValue(':slika_mala',$new_name_mala );
                $query->bindValue(':slika_golema',$new_name_golema );
                $query->bindValue(':naslov', $_POST['naslov']);
                $query->bindValue(':sodrzina', $_POST['sodrzina']);
                $query->bindValue(':id_kategorija', $_POST['id_kategorija']);
                $query->bindValue(':id_galerija', $_POST['id_galerija']);
                $query->execute();
            }
        }else{
            $sql = 'insert into strani (naslov,sodrzina,objavena_na,id_kategorija,id_galerija)
          VALUES (:naslov, :sodrzina, now(), :id_kategorija, :id_galerija )';

            $query = $db->prepare($sql);

            $query->bindValue(':naslov', $_POST['naslov']);
            $query->bindValue(':sodrzina', $_POST['sodrzina']);
            $query->bindValue(':id_kategorija', $_POST['id_kategorija']);
            $query->bindValue(':id_galerija', $_POST['id_galerija']);

            $query->execute();
        }
//}
   header('location:../admin.php?page=strani');
}

