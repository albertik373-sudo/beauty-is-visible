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
      <h1>My account page</h1>
      <div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.svgrepo.com/show/384670/account-avatar-profile-user.svg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Account info</h5>
        <p class="card-text">Account name is: <?php
        echo $_GET["name"]; ?></p>
        <p class="card-text">Account lastname is: <?php
        echo $_GET["lastname"]; ?></p>
        <p class="card-text">Account email is: <?php
        echo $_GET["email"]; ?></p>
        <p class="card-text">Account age is: <?php
        echo $_GET["age"]; ?></p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
    </div>
  </div>
</div>
    