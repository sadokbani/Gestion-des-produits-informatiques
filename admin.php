<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>High Tech</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <!-- Social icon -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css.css">

  </head>


  <body>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>






<!-- message-->
<div class="modal fade" role="dialog" id="message">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 600px;">
      <div class="modal-header">
        <h3 class="modal-title">Contact</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>supp</th>
                  </tr>
                </thead>
                <tbody>
        <?php 
               
                  $connect = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
                  $query = "SELECT * FROM message order by id desc ";
                    $resultat = $connect->query($query); 
                    


               
                while($ligne=$resultat->fetch())
                {
                  
                 echo  '
                  
                  <tr>
                    <td>'.$ligne['nom'].'</td>
                    <td>'.$ligne['prenom'].'</td>
                    <td>'.$ligne['email'].'</td>
                    <td>'.$ligne['message'].'</td>
                    <td><a class="close" href="delete.php?id='.$ligne['id'].'"  >&times;</a></td>
                  </tr>
                  
                
              
            ';
                }
                ?>
         <!--  -->


<?php  

  $resultat->closeCursor();
?>
                </tbody>
              </table>

        
      </div>
    </div>
  </div>
</div>


<!-- ajouter -->

<div class="modal fade" role="dialog" id="ajout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Ajouter article</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form method="post" action="ajout.php" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
          <input type="text" name="newnom" class="form-control" placeholder="nom de produit" required="" maxlength="30">
        </div>
        <div class="form-group">
          <input type="number" name="newprix" class="form-control" placeholder="prix" required="" maxlength="4">
        </div>
        <div class="form-group">
          <input type="file" name="file" class="form-control" required="" >
        </div>
        <div class="form-group">
          <input type="number" name="quantite" class="form-control" placeholder="quantite" required="" maxlength="4">
        </div>
        <h6>Categorie:</h6>
        <div class="form-group">
          <select class="form-control" name="newcategorie">
            <option>ordinateur</option>
            <option>telephone</option>
            <option>accessoire</option>
          </select>
          
        </div>
        <div class="form-group">
          <textarea class="form-control" placeholder="description" name="descrip" required="" maxlength="100"></textarea>
        </div>
        <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-success">Ajouter</button>
        </div>
      </div>
      </form>
      
    </div>
  </div>
</div>




<!-- update -->

<div class="modal fade" role="dialog" id="update">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Modifier article</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form method="post" action="update.php" enctype="multipart/form-data" >
      <div class="modal-body">
        <div class="form-group">
          <h5>Nom du produit:</h5>
          <select class="form-control" name="update" >
           <?php  
                           $bd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
                           $req = "SELECT nom FROM produit ";
                            $result = $bd->query($req); 
                            while($ligne=$result->fetch())   
                           {    
                           echo '<option>'.$ligne['nom'].'</option>';
                           
                           }
                            $result->closeCursor();
                           ?>

          </select>
        </div>
        <div class="form-group">
          <input type="number" name="newprix" class="form-control" placeholder="new prix" maxlength="4">
        </div>
        <div class="form-group">
          <input type="file" name="file" class="form-control" > 
        </div>
        <div class="form-group">
          <input type="number" name="quantite" class="form-control" placeholder="quantite"  maxlength="4">
        </div>
        <div class="form-group">
          <textarea class="form-control" placeholder="new description" name="descrip" maxlength="100"></textarea>
        </div>
        <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-success">Modifier</button>
        </div>
      </div>
      </form>
      
    </div>
  </div>
</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">High Tech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="admin.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <?php  $connect = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
            $test="SELECT * from message  ";

            $res=$connect->query($test);
            $i=0;
            foreach ($connect->query($test) as $row) {
              $i++;}

            ?>
              <a href="" class="nav-link" data-toggle="modal" data-target="#message">Mes messages (<?php echo $i;  ?>)</a>
            </li>
            <li class="nav-item">
              <a href="home.php" class="nav-link" >LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">New Technologie</h1>
          <div class="list-group">
            <a href="#" class="list-group-item" data-toggle="modal" data-target="#ajout">Ajouter un article</a>
            <a href="#" class="list-group-item" data-toggle="modal" data-target="#update">Modifier un article</a>
            <a href="supp.php" class="list-group-item" >Supprimer tous les articles</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

           <div class="row" style="margin-top: 30px;">
 <?php 
               
                  $connect = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
                  $query = "SELECT * FROM produit ";
                    $resultat = $connect->query($query); 
                    


               
                while($ligne=$resultat->fetch())
                {
                  
                 echo  '<div class="col-lg-4 col-md-6 mb-4">
              <div style="border:1px solid rgba(0,0,0,.125);border-radius:3px;height:400px;">
                <a href="#"><img class="card-img-top" src="'.$ligne['path'].'" alt=""></a>
                <center><div class="card-body">
                  <h4 class="card-title">
                    <a href="#">'.$ligne['nom'].'</a>
                  </h4>
                  <h5>'.$ligne['prix'].'DT</h5>
                  <h6 class="card-text">quantite : '.$ligne['quantite'].'</h6>
                  <p class="card-text">'.$ligne['description'].'</p>
                  <a style="color:white; margin-top:-10px;" class="btn btn-primary" href="deleteart.php?nom='.$ligne['nom'].'">Supprimer</a>
                </div></center>
                
              </div>
            </div>';
                }
                ?>
         <!--  -->


<?php  

  $resultat->closeCursor();
?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" >
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; SADOK</p>
      </div>
      <center><span id="footer">
        <p style="margin-bottom: 0px;color: white;font-family:BlinkMacSystemFont;font-size: 1rem;font-weight: 400;line-height: 1.5;">FELLOW US</p>  
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-pinterest"></a>
        <a href="#" class="fa fa-snapchat-ghost"></a>
      </span></center>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
