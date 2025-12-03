 <?php include("data.php"); ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Astgik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Products</h1>

<div class="row">
<?php foreach($posts as $key => $value) {  ?>
  <div class="card" style="width: 18rem; margin:15px">
  <img src="<?php echo $value['image']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value['name']; ?></h5>
    <p class="card-text"><?php echo $value['desc']; ?></p>
    <a href="single.php?id=<?php echo $key; ?>" class="btn btn-primary">For more info</a>
  </div>
</div>
<?php } ?>



      
      </div>
    
  
</div>
    