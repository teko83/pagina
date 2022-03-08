<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina de inicio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include('include/menu.php');?>
</head>
<body>
    <?php menu();?>
    <h1 align="center">Sergio Caffaro Programador</h1>
    <div class="alert alert-danger" role="alert">
  No tocar aqui!
</div>
<button type="button" class="btn btn-danger">Enviar</button>
<button type="button" class="btn btn-outline-primary">Enviar</button>
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Boton1 </button>
  
</div>
<h1>apriete aqui <span class="badge bg-secondary">New</span></h1>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Producto</h5>
    <p class="card-text">Esto es un producto.</p>
    <a href="#" class="btn btn-primary">ver mas...</a>
  </div>
</div>
<div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>