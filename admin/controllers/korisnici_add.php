<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 5/16/2016
 * Time: 6:07 PM
 */
if(isset($_POST['submit'])){
    include '../db.php';

   if($_POST['password']==$_POST['password_confirmation']){

       $sql='insert into korisnici(ime,email,password,id_tip_korisnici) values (:ime, :email, :password, :id_tip_korisnici)';

       $query=$db->prepare($sql);

       $query->bindValue(':ime',$_POST['ime']);
       $query->bindValue(':email',$_POST['email']);
       $query->bindValue(':password',$_POST['password']);
       $query->bindValue(':id_tip_korisnici',$_POST['id_tip_korisnici']);

       $query->execute();
      header('location:../admin.php?page=korisnici');


   }else{
       //print message
       echo "<p>Passwords don't match</p>";
   }

}