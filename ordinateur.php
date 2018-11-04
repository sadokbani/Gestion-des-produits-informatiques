
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



<!-- login -->

<div class="modal fade" role="dialog" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Login</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form method="post" action="login.php">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="" maxlength="20">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="" maxlength="20">
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Sign in</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- contact-->
<div class="modal fade" role="dialog" id="contact">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Contact</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form method="post" action="ajoutermsg.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="msgnom" class="form-control" placeholder="Nom" required="" maxlength="20">
          </div>
          <div class="form-group">
            <input type="text" name="msgprenom" class="form-control" placeholder="Prenom" required="" maxlength="20">
          </div>
          <div class="form-group">
            <input type="Email" name="msgeamil" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="description" name="msg" required="" maxlength="150"></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-success">Send</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- about -->
<div class="modal fade" role="dialog" id="about">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">About</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <h3>A propos</h3>
          <p>High Tech Store, spécialisée dans la Vente en ligne et en magasin de produits High-Tech.
Num One sur le marché du Smartphone en Tunisie.</p>
          <h3>Mentions légales</h3>
          <p> High Tech Store<br>
              Tél: 24 015 015<br>
              26 015 015<br>
              21 055 055<br>
              Adressse: 96 Avenue mouaouia ibn abi sofiane Menzah 7
              2037 Ariana - Tunisie
            </p>
          <h3>Produits</h3>
          <p>Mobile, Téléphone, Cellulaire, Tablette tactile, Accessoire, Chargeur, Téléviseurs Coques et Étuis</p>
        </div>
      </div>
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
              <a class="nav-link" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" data-toggle="modal" data-target="#about">About</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" data-toggle="modal" data-target="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" data-toggle="modal" data-target="#loginModal">LOGIN</a>
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
            <a href="ordinateur.php" class="list-group-item">Ordinateur</a>
            <a href="telephone.php" class="list-group-item">Telephone</a>
            <a href="accessoire.php" class="list-group-item">Accessoire</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <div class="row" style="margin-top: 30px;">
 <?php 
               
                  $connect = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
                  $query = "SELECT * FROM produit WHERE categorie='ordinateur' ";
                    $resultat = $connect->query($query); 
                    


               
                while($ligne=$resultat->fetch())
                {
                  
                 echo   '<div class="col-lg-4 col-md-6 mb-4">
              <div style="border:1px solid rgba(0,0,0,.125);border-radius:3px;height:350px;">
                <a href="#"><img class="card-img-top" src="'.$ligne['path'].'" alt=""></a>
                <center><div class="card-body">
                  <h4 class="card-title">
                    <a href="#">'.$ligne['nom'].'</a>
                  </h4>
                  <h5>'.$ligne['prix'].'DT</h5>
                  <p class="card-text">'.$ligne['description'].'</p>
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
