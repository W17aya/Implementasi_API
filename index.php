<?php

$sumber= 'https://api.kawalcorona.com/indonesia';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Implementasi API</title>
  </head>
  <body>
    <h1 class="text-center mt-3">KAWAL CORONA</h1>

    <div class="container">
<div class="row">
    <?php foreach ($data as $row){ 

?>
    <div class="col-3 mt-3">
        <div class="card text-white bg-primary m-3 ">
         <h3> <?php echo  $row['positif']  ?></h3>
        <div class="card-body">
           <div class="row">
               <div class="col-5">
                   <div class="icon-big text-center">
                       <i class="flaticon-users"></i>
    </div>
               </div>
           </div>
               <div class="col-7 col-stats">
                   <div class="numbers">
                       <div class="card-category"> Positif</div>
                   </div>
               </div>
                   </div>
               </div>
           </div>
    <div class="col-3 mt-3">
        <div class="card text-white bg-success m-3">
         <h3> <?php echo  $row['sembuh'] ?></h3>
        <div class="card-body">
           <div class="row">
               <div class="col-5">
                   <div class="icon-big text-center">
                       <i class="flaticon-users"></i>
    </div>
               </div>
           </div>
               <div class="col-7 col-stats">
                   <div class="numbers">
                       <div class="card-category">Sembuh</div>
                   </div>
               </div>
                   </div>
               </div>
           </div>
    <div class="col-3 mt-3">
        <div class="card text-white bg-danger m-3 ">
         <h3> <?php echo  $row['meninggal'] ?></h3>
        <div class="card-body">
           <div class="row">
               <div class="col-5">
                   <div class="icon-big text-center">
                       <i class="flaticon-users"></i>
    </div>
               </div>
           </div>
               <div class="col-7 col-stats">
                   <div class="numbers">
                       <div class="card-category">Meninggal</div>
                   </div>
               </div>
                   </div>
               </div>
           </div>
    <div class="col-3 mt-3">
        <div class="card text-white bg-secondary m-3 ">
         <h3> <?php echo  $row['dirawat'] ?></h3>
        <div class="card-body">
           <div class="row">
               <div class="col-5">
                   <div class="icon-big text-center">
                       <i class="flaticon-users"></i>
    </div>
               </div>
           </div>
               <div class="col-7 col-stats">
                   <div class="numbers">
                       <div class="card-category">Dirawat</div>
                   </div>
               </div>
                   </div>
               </div>
           </div>

<?php }?>
</div>
    </div>
     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>