<?php

    require "dbconfig/config.php";
    // echo '<script type="text/javascript" charset="utf-8"async defer> alert("Done") </script>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Registration - RUET ALUMNI ASSOCIATION</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <style type="text/css">
        .register{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        margin-top: 3%;
        padding: 3%;
    }
    .register-left{
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }
    .register-left input{
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }
    .register-right{
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }
    .register-left img{
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite  alternate;
        animation: mover 1s infinite  alternate;
    }
    @-webkit-keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    .register-left p{
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }
    .register .register-form{
        padding: 10%;
        margin-top: 10%;
    }
    .btnRegister{
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #0062cc;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }
    .register .nav-tabs{
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }
    .register .nav-tabs .nav-link{
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }
    .register .nav-tabs .nav-link:hover{
        border: none;
    }
    .register .nav-tabs .nav-link.active{
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }
    .register-heading{
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }    

    </style>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>


<body>


<?php

    include "header.php";

?>


    <!---------------------message from VC ----------------------->
        <br><br>

    <!-----------------------end message----------------->

    <div class="container register">
                
                <div class="row">
                    
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from being an Alumni Member!</p>
                        <input type="submit" name="login" value="Login"/><br/>
                    </div>

                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ex-Student</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a RUETian</h3>
                                
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">


                                        <form action="signin.php" method="post" accept-charset="utf-8">
                                           
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Name *" value="" required="" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="roll" placeholder="Roll *" value="" required="" />
                                            </div>


                                            <div class="form-group">
                                                <input type="text" class="form-control" name="series" placeholder="Series *" value="" required="" />
                                            </div>


                                            <div class="form-group">
                                                <input type="text" class="form-control" name="dept" placeholder="Department *" value="" required="" />
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="pass" placeholder="Password *" value="" required="" />
                                            </div>

                                            <div class="form-group">
                                                <input type="password" class="form-control"  name="cpass" placeholder="Confirm Password *" value="" required="" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="home_dist" placeholder="Home District *" value="" required="" />
                                            </div>

                                            
                                            <div class="form-group">
                                                <div class="maxl">
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="male" checked>
                                                        <span> Male </span> 
                                                    </label>
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="female">
                                                        <span>Female </span> 
                                                    </label>
                                                </div>
                                            </div>

                                    </div>

                                    <div class="col-md-6">

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="designation" placeholder="Designation *" value="" required="" />
                                            </div>
                                                   
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="company" placeholder="Institution/Company *" value="" required="" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="country" placeholder="Country at present living *" value="" required="" />
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" required="" />
                                            </div>
                                            

                                            <!---end-------------->
                                            <div class="form-group">
                                                <input type="text" minlength="11" maxlength="14" class="form-control" name="phone" placeholder="Your Phone *" value="" required="" />
                                            </div>

                                            <!-- <div class="form-group">
                                                <select class="form-control" name="bld_grp" required>
                                                    <option class="hidden" selected disabled>Please select your Blood Group</option>
                                                    <option value="A+">Blood Group : A+</option>
                                                    <option value="A-">Blood Group : A-</option>
                                                    <option value="B+">Blood Group : B+</option>
                                                    <option value="B-">Blood Group : B-</option>
                                                    <option value="AB+">Blood Group : AB+</option>
                                                    <option value="AB-">Blood Group : AB-</option>
                                                    <option value="O+">Blood Group : O+</option> 
                                                    <option value="O-">Blood Group : O-</option>
                                                </select>
                                            </div> --> 

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="bld_grp" placeholder="Blood-Group *" value="" required="" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="fb" placeholder="Facebook link *" value="" required="" />
                                            </div>

                                            <!-- <input type="submit" class="btnRegister"  name="signup" value="Register"/> -->
                                            <button class="btnRegister" name = "signup"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <p class="mt-5 mb-3 text-muted" > <h5 style="text-align: center;">&copy;RUET ALUMNI</h5></p>


            <!-- </div>  -->
    <!--         <br><br>
            <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2019 All Right Reserved By <span>RUET ALUMNI</span></p>
                </div>
            </div>
        </div>
            </footer> -->
    
   
    <?php

        if(isset($_POST['signup']))
        {
            // echo 'hello';
            // echo "My name is shuvon";
            //echo '<script type="text/javascript" charset="utf-8"async defer> alert("Done") </script>';
            $name = $_POST['name'];
            $roll = $_POST['roll'];
            $series = $_POST['series'];
            $dept = $_POST['dept'];
            $pass = $_POST['pass'];
            $cpass = $_POST['cpass'];
            $home_dist = $_POST['home_dist'];
            $gender = $_POST['gender'];
            $designation = $_POST['designation'];
            $company = $_POST['company'];
            $country = $_POST['country'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $bld_grp = $_POST['bld_grp'];
            $fb = $_POST['fb'];

            $flag = 0;

            if($pass != $cpass)
            {
                echo '<script type="text/javascript" charset="utf-8" async defer> alert("Student ID already exists !!! Choose another Student ID ...!") ; window.location="pass_cpass.php" </script>';
            }
            else
            {

                $query = "select * from regi WHERE roll = '$roll' ";
                $query_run = mysqli_query($conn,$query);

                if(mysqli_num_rows($query_run)>0)
                {
                    echo '<script type="text/javascript" charset="utf-8" async defer> alert("Student ID already exists !!! Choose another Student ID ...!") ; window.location="multi_roll.php" </script>';
                    $flag = 1;
                }
                else
                {
                    $query = "insert into regi values('$name','$roll','$series','$dept','$pass','$cpass','$home_dist','$gender','$designation','$company','$country','$email','$phone','$bld_grp','$fb')";
                    $query_run = mysqli_query($conn,$query);

                    // header('location:home.php');
                    
                    //echo '<script type="text/javascript" charset="utf-8"async defer> alert("Registration completed"); </script>';

                    echo '<script> window.location="regi_done.php" </script>';

                }
            }
            
            
        }
            // echo '<script type="text/javascript" charset="utf-8"async defer> alert("Done") </script>'; -->
    ?>

    </div>


</body>
</html>
