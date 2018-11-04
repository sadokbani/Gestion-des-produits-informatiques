<?php 
$bd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
   
         $id=$_GET['id'];   
         $supp="DELETE from message WHERE id='$id'";
                             $result = $bd->query($supp);
                              
                               header('location:admin.php');

                           
                           ?>

