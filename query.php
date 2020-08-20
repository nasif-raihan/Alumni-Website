<?php

    require "dbconfig/config.php";
    include "header2.php";
    // echo '<script type="text/javascript" charset="utf-8"async defer> alert("Done") </script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Query</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">





    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
        padding-top: 3rem;
        background-color: lightblue;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

</head>


<body style="background-color: #c1d7d7">

<?php

  include "header2.php";

?>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <br><br>
  <div class="jumbotron">
    <div class="container">
      
      <h1 class="display-3"style="color: dodgerblue">Hello, RUETIAN!</h1>
      
      <p>We are very delighted to WELCOME you as a new member of our community. Having you with us is a matter of great joy and comfort. We look forward to sharing some incredible moments together. We believe, together, we can do something extraordinary for the society. Welcome to the community once again, enjoy the facilities here. CHEERS!!</p>
      
      <p><a class="btn btn-primary btn-lg" href="home.php" role="button">Go to HOME &raquo;</a></p>

    </div>
  </div>
</main>


<h3 style="text-align: center;">Make Your Desired Query!</h3>

<p style="text-align: center;color: #003300;"><i> 
  You can perform both <b style="color: green;">single</b> and <b style="color: green;">multiple</b> query here.</i></small> 
</p>

<br>

<div class="container">
    <!-- Example row of columns -->
   

    <div class="row">
      <!-- <div class="col-md-4"> -->
        <div class="form-group col-md-6">
          
          <form class="form-signin" action="query_roll.php" method="post" accept-charset="utf-8">

            <div class="form-group">
              <small class="text-muted"><i style="color: #003300;"> Search by <b>ROLL</b></i></small>
              <input class="form-control mr-sm-2" name="roll" type="text" placeholder="Roll" aria-label="Search" >
            </div>

            <div class="form-group">
              <small class="text-muted"><i style="color: #003300;"> Search by <b>NAME</b></i></small>
              <input class="form-control mr-sm-2" name="name" type="text" placeholder="Name" aria-label="Search" >
            </div>

            <div class="form-group">
              <small class="text-muted"><i style="color: #003300;"> Search by <b>SERIES</b></i></small>
              <input class="form-control mr-sm-2" name="series" type="text" placeholder="Series" aria-label="Search" >
            </div>

        </div>

        <div class="col-md-6">

          <div class="form-group">
            <small class="text-muted"><i style="color: #003300;"> Search by <b>BLOOD GROUP</b></i></small>
            <input class="form-control mr-sm-2" name="bld_grp" type="text" placeholder="Blood Group" aria-label="Search" >
          </div>


          <div class="form-group">
            <small class="text-muted"> <i style="color: #003300;">Search by <b>COMPANY</b></i></small>
            <input class="form-control mr-sm-2" name="company" type="text" placeholder="Company" aria-label="Search" >
          </div>

          <div class="form-group">
            <small class="text-muted"><i style="color: #003300;">Search by <b>COUNTRY</b></i></small>
            <input class="form-control mr-sm-2" name="country" type="text" placeholder="Country" aria-label="Search" >
          </div>

            <button class="btn btn-success btn-lg btn-block" name="btn1" type="submit">Search</button>


        </div>

          <!-- <button class="btn btn-success btn-lg name="btn1" type="submit">Search</button> -->

          </form>

      


    </div>

    <hr>

</div>


<?php
    include "footer.php";
?>