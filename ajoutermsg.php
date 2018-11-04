<?php

	$connect = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
   	$nom=$_POST['msgnom'];
   	$prenom=$_POST['msgprenom'];
   	$email=$_POST['msgeamil'];
   	$msg=$_POST['msg'];
   	


    $query = "INSERT INTO message (`nom`,`prenom`, `email`, `message`) VALUES ('$nom','$prenom','$email','$msg')";
    $resultat = $connect->query($query);
    header('location:home.php');


  ?>