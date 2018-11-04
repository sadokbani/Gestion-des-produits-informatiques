 <?php 

      $connect = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
      $nom=$_POST['newnom'];
      $prix=$_POST['newprix'];
      $quantite=$_POST['quantite'];
      $descr=$_POST['descrip'];
      $file = $_FILES['file']['name'];                
      if (isset($_POST['update'])) {
      $s=$_POST['update'];


        if ($_POST['newprix']!=0) {
          $req1 = "UPDATE produit Set prix='$prix' WHERE nom='$s'";
          $res1= $connect->query($req1);
        }
        if ($_FILES['file']['name']!=='') {
          $req2 = "UPDATE produit Set path='$file' WHERE nom='$s'";
          $res2= $connect->query($req2);
        }
        if ($_POST['descrip']!=='') {
          $req3 = "UPDATE produit Set description='$descr' WHERE nom='$s'";
          $res3= $connect->query($req3);
        
        
        }
        if ($_POST['quantite']!=0) {
          $req4 = "UPDATE produit Set quantite='$quantite' WHERE nom='$s'";
          $res4= $connect->query($req4);
        }
      
      
      
      header('location:admin.php');
      
       }
         ?>

        

       