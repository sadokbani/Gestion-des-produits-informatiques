 <?php        
  $connect = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', ''); 
  $supp="DELETE from produit ";
  $result = $connect->query($supp);
  header("location:admin.php")
  
  
        ?>

