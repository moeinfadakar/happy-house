<?php
include "database.php";

$payamha =  mysqli_query($connection,"SELECT * FROM `messages`");


?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>happy-family</title>
    <link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" type="text/css">

</head>
<body>
    <div class="container-fluid">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
<h4>happy family</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li><li class="nav-item">
          <a class="nav-link " href="#">  
          <button type="button" class="btn btn-danger rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
  + write Something
</button>
</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link " href="#" role="button"  aria-expanded="false">
          </a>
       
        </li>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control mx-2 mt-3" type="search" placeholder="Search" aria-label="Search">
        <button type="button" class="btn btn-danger mt-3">search</button>
      </form>
    </div>
  </div>
</nav>

</div>
<!-- end of navbar -->
<div class="container mt-4">
<div class="col-12">

<!-- list group :  -->
<!-- php side :  -->

<ul class="list-group list-group-numbered">

<?php foreach($payamha as $payam) : ?>

  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><?php echo $payam["name"]; ?> :</div>
      <br>
      <div class="fw-bold"><?php echo $payam["text"]; ?></div>
   </div>
    <span class="badge bg-danger rounded-pill"><?php echo $payam["time"]; ?></span>
  </li>

<?php endforeach ?>

</ul>



<!-- end php -->

<!-- Modal side -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
<!-- start form -->


<form action="new-message.php" method="post">

 <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">name</label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">text</label>
  <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<!-- send btn -->
<button type="submit" class="btn btn-danger" > Send </button>
</form>

<!-- end form -->


      </div>
    </div>
  </div>
</div>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>