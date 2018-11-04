 <?php 

      $connect = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
      
      $prix=$_POST['newprix'];
      $descr=$_POST['descrip'];
      $file = $_FILES['file']['name'];                
      
      $s=$_GET['nom'];


        if ($prix!=0) {
          $req1 = "UPDATE produit Set prix='$prix' WHERE nom='$s'";
          $res1= $connect->query($req1);
        }
        if ($file!=='') {
          $req2 = "UPDATE produit Set path='$file' WHERE nom='$s'";
          $res2= $connect->query($req2);
        }
        if ($descr!=='') {
          $req3 = "UPDATE produit Set description='$descr' WHERE nom='$s'";
          $res3= $connect->query($req3);
       }
             header('location:admin.php');

         ?>
