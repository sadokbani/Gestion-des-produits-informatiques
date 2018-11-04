<?php
$bd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
   
         $nom=$_GET['nom'];   
         $supp="DELETE from produit WHERE nom='$nom'";
                             $result = $bd->query($supp);
                              
                               header('location:admin.php');

                       

  ?>