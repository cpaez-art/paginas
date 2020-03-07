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

  <title>Venta autos</title>

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
    <span class="site-heading-lower">AutoCUN</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">AutoCun</a>
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






<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

  <div class="panel-body">
    <h1>Mis Productos</h1>
    <a href="VerCarrito.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">


<div class="container">
  <h3 class="mt-5">Busca el carro adecuado para ti</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      <form method="POST" name="Busqueda" action="PaginaPrincipal.php" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
          <select name="Marca[]" multiple="multiple" class="form-control">
            <option value="0" >Seleccione Marca</option>
            <?php
   if (! empty($MarcaResultado)) {
   foreach ($MarcaResultado as $key => $value) {
   echo '<option value="' . $MarcaResultado[$key]['Marca'].'">'.$MarcaResultado[$key]['Marca'].'</option>';
      }
	}
?>



          </select>
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <select name="Color[]" multiple="multiple" class="form-control">
            <option value="0">Seleccione Color</option>
            <?php
         if (! empty($ColorResultado)) {
         foreach ($ColorResultado as $keyy => $value) {
         echo '<option value="' . $ColorResultado[$keyy]['Color'] . '">' . $ColorResultado[$keyy]['Color'] . '</option>';
              }
        }
?>
          </select>
        </div>
        <button class="btn btn-primary">Buscar</button>
      </form>
     

      <?php
  if ((! empty($_POST['Marca'])) or (! empty($_POST['Color'])) ) {?>
  <?php
        //get rows query
        

        $query = $db->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 10");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["Marca"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' COP'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar al Carrito</a>
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


      <table class="table">
        <thead class="thead-dark">
          <tr>
        


            <th><strong>Nombre</strong></th>
            <th><strong>color</strong></th>
            <th><strong>Marca</strong></th>
            <th><strong>Precio</strong></th>






          </tr>
        </thead>
        <tbody>
          <?php
  $query = "SELECT * from mis_productos";
  $i = 0;
  $Marca="";
  $union="";
  if (! empty($_POST['Marca'])){
	  $seleccionCount = count($_POST['Marca']);
  $seleccion = "";


  while ($i < $seleccionCount) {
  $seleccion = $seleccion . "'" . $_POST['Marca'][$i] . "'";
     if ($i < $seleccionCount - 1) {
         $seleccion = $seleccion . ", ";
         }
     $i++;
	$Marca="Marca in (".$seleccion.")"; 
  }
  
}
  $Color="";
  if (!empty($_POST['Color'])) {  
  $sa = count($_POST['Color']);
  $pseleccionCount = count($_POST['Color']);
//Color
  $ii = 0;
  $pseleccion = "";
  while ($ii < $pseleccionCount) {
  $pseleccion = $pseleccion . "'" . $_POST['Color'][$ii] . "'";
     if ($ii < $pseleccionCount - 1) {
         $pseleccion = $pseleccion . ", ";
         }
     $ii++;
  }
  $Color=" Color in (".$pseleccion.")";
  } // cierra post Color


if ((isset($_POST['Marca'])) && (isset($_POST['Color'])) ) {
	if (($_POST['Marca']>=1) &&($_POST['Color']>=1) ) {  
	$union=" and ";
}

}  
  $query = $query." WHERE $Marca $union $Color";  
  
  $result = $db_handle->runQuery($query);
  }
  
  if (! empty($result)) {
// Mostramos resultados de la busqueda
  foreach ($result as $key => $value) {
  ?>



          <tr>
            <td><?php echo $result[$key]['name']; ?></td>
            <td><?php echo $result[$key]['Color']; ?></td>
            <td><?php echo $result[$key]['Marca']; ?></td>
            <td><?php echo $result[$key]['price']; ?></td>
          </tr>




          <?php
    }
    ?>
          <?php
 }
               
?>
        </tbody>
      </table>
      
      <!-- Fin Contenido --> 
    </div>
  </div>
  </div>

<script src="assets/jquery-1.12.4-jquery.min.js"></script> 
<script src="assets/jquery.validate.min.js"></script> 
<script src="assets/ValidarRegistro.js"></script> 



      
 <div class="panel-footer">AutoCun</div>
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
            <span class="section-heading-upper">AutoCUN</span>
            <span class="section-heading-lower">Automoviles </span>
          </h2>
          <p class="mb-3">Venta de Automoviles.
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="Contacto.html">Ya compraste!</a>
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
              <span class="section-heading-upper">Nuestros Autos</span>
              <span class="section-heading-lower">Para ti</span>
            </h2>
            <p class="mb-0">VENTA DE AUTOS</p>
          </div>
        </div>
      </div>
    </div>
  </section>





  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">AutoCUN 2020</p>
    </div>




  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
