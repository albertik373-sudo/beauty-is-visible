<?php include ("header.php"); ?>
<?php include("data.php"); ?>

<?php
$id = $_GET["id"];

$data = $posts[$id];

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Product page</h1>

<div class="card mb-3">
  <img src="<?php echo $data['image']; ?>"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data['name']; ?></h5>
    <p class="card-text"><?php echo $data['info']; ?></p>
    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
  </div>
</div>
    
  
</div>
    