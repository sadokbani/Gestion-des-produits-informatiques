<?php

	$connect = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
   	$nom=$_POST['newnom'];
   	$cat=$_POST['newcategorie'];
   	$prix=$_POST['newprix'];
   	$desc=$_POST['descrip'];
   	$file = $_FILES['file']['name'];
    $quantite=$_POST['quantite'];


    $query = "INSERT INTO produit (`path`,`nom`, `categorie`, `prix`, `description`, `quantite`) VALUES ('$file','$nom','$cat','$prix','$desc',$quantite)";
    $resultat = $connect->query($query); 
    header('location:admin.php');

  ?>