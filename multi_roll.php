<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
  include "header.php";
?>


    <!---------------------message from VC ----------------------->
        <br><br>


    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        
        <div class="alert alert-danger" role="alert">
          <h5>This roll had been added before! Please check your data carefully.</h5>
        </div>

        <br><br>
        <img src="img/error.jpg" width="1305px" height="600px">
      </div>


    </div>

    <?php
      include "footer.php";
    ?>

</body>
</html>