<?php
include 'Configuracion.php';
include "DBController.php";
$db_handle = new DBController();


$MarcaResultado = $db_handle->runQuery("SELECT DISTINCT Marca FROM mis_productos ORDER BY Marca DESC");

$ColorResultado = $db_handle->runQuery("SELECT DISTINCT Color FROM mis_productos ORDER BY Color DESC");

?>
<!DOCTYPE html>
<html lang="es">
<head>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>Plato_Recetas</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Bienvenido a Tu sesion</span>
    <span class="site-heading-lower">RestauranteCUN</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">RestauranteCUN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="PaginaPrincipal.php">Principal
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="VerCarrito.php">Ver Carrito</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="Pagos.php">Pagos</a>
          </li>
      
          </li>
        </ul>
      </div>
    </div>
  </nav>


<div class="panel-body">
    <h1 class="site-heading text-center text-white d-none d-lg-block" >Mis Productos</h1>
    <a href="VerCarrito.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 10");
        

        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>

        <div class="col-xs-4 col-sm-4 col-med-4 col-lg-6 col-lg-offset-3">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading text-center"><?php echo $row["name"]; ?></h4>
                    <p class="list-group-item-text-center"><?php echo $row["Marca"]; ?></p>
                     
                   <p class="list-group-item-text-center"><?php echo '<img src="'.$row['imagenes'].'" width="600px" height="200px">'; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' COP'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar a la Carta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Producto(s) no existe.....</p>
        <?php } ?>
    </div>
        </div>
</div>

</div>
</div>
      
 <div class="panel-footer">RestauranteCUN</div>
 </div>
 </div>
  </div>
 </div>



 <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">RestauranteCUN</span>
            <span class="section-heading-lower">Recetas </span>
          </h2>
          <p class="mb-3">Venta de Platos.
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="Contacto.html">Ya comiste!</a>
          </div>
        </div>
      </div>
    </div>


  </section>



 

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Nuestros Platos</span>
              <span class="section-heading-lower">Para ti</span>
            </h2>
            <p class="mb-0">VENTA DE PLATO</p>
          </div>
        </div>
      </div>
    </div>
  </section>





  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">RestauranteCUN 2020</p>
    </div>




  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
