
<?php

  include "header.php";
  require "dbconfig/config.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


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
      html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <br><br>

  <form action="signup.php" class="form-signin" method="post" accept-charset="utf-8">

    <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    
    <div class="form-group">
        <input type="text" class="form-control" name="roll" placeholder="Roll *" value="" required="" />
    </div>


    <div class="form-group">
        <input type="password" class="form-control" name="pass" placeholder="Password *" value="" required="" />
    </div>

    
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>
    <!-- <button class="btnRegister" name = "signup"><span>Register</span></button> -->
    <p class="mt-5 mb-3 text-muted">&copy; RUET ALUMNI</p>
  </form>



<?php

  session_start();

  if(isset($_POST['login']))
  {
      
    $roll = $_POST['roll'];
    $pass = $_POST['pass'];


    if(isset($_SESSION['$roll']))
    {
      echo "<h1> Welcome ".$_SESSION['$roll']."</h1>";
      echo '<script> window.location="query__.php" </script>'; 
    }


    $flag = 0;

    $sql = "SELECT pass FROM regi WHERE roll = (SELECT roll FROM regi where roll = $roll) ";
    $res = mysqli_query($conn,$sql);

    if(!$res)
    {
      die("Query Failed!!!");
    }
    else
    {
      while($row = mysqli_fetch_assoc($res))
      {
        foreach ($row as $key => $value) {
          if($value == $pass)
          {
            $flag = 1;
          } 
        }
      }
      mysqli_free_result($res);
    }

    if($flag)
    {
      echo '<script> window.location="query__.php" </script>'; 
    }
    else
    {
      echo '<script> window.location="pass_cpass.php" </script>';
    }
      
      
  }
            // echo '<script type="text/javascript" charset="utf-8"async defer> alert("Done") </script>'; -->
?>

</body>
</html>
