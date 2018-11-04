<?php
	$connect = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
   	$username=$_POST['username'];
   	$password=$_POST['password'];
   	$req= "SELECT * FROM user";
   	$res= $connect->query($req);
   	$ligne=$res->fetch();
   	if (($ligne['username']==$username) && ($ligne['password']==$password)) {
   		header('location:admin.php');
   	}
    else{
    	echo '<script language="Javascript">
				alert ("login incorrect" );
				location.href = "home.php";
			</script>';
    }


  ?>

