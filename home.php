
<body>

<?php
require "dbconfig/config.php";
include "header1.php";
?>

<br><br>

    <?php
      include "slide.php";
    ?>
    <!---------------carousel is added above----------->

  <!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="img/rr.png" alt="">
      </div>

      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light" style="color: dodgerblue">Hello Message!</h1>
        <p>"I welcome you to the new website of RUET Alumni. If you are a graduate of RUET who is yet to become a member of this organization, I earnestly invite you to become a member – it is easy and inexpensive. Membership enables you to enjoy being a part of the RUET Alumni community and related fellowship in various forms. Take advantage of the opportunity that this organization offers to all Alumni of RUET, our dear alma mater, to give our loving attention and support that she deserves for achieving greater glory and world class status. Be “Proud to be a RUET Graduate!" <b><h6><i>-Prof. Dr. Md. Rafiqul Islam Sheikh</i><br>
       Vice-Chancellor, RUET</h6></p></p>
      </div>

    </div>


    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">United we stand stonger.</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      
            <div class="col-md-4 mb-5">
              <div class="card" style="width: 18rem;">
                <img src="img/u1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Find Your RUETian Neighbour.</h5>
                  <p><i>RUETians are everywhere. You just need to find him/her and call him/her up for your treat. ;) Put the country name in the search box to perform your query.</i></p>
                  <a href="http://localhost/RUET%20ALUMNI/login.php" class="btn btn-primary">Let's Visit</a>
                </div>
              </div>
            </div>


            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-5">
              <div class="card" style="width: 18rem;">
                <img src="img/blood.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Blood Group</h5>
                  <p><i>Here we have a database of the blood group of RUETians.</i></p>
                  <a href="http://localhost/RUET%20ALUMNI/login.php" class="btn btn-danger">Let's Visit</a>
                </div>
              </div>
            </div>

            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-5">
              <div class="card" style="width: 18rem;">
                <img src="img/green.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Social Acitivities</h5>
                  <p><i>We the RUETians often raise fund and do some welfare activities for the society. Here is presented details about some welfare activities organized by our organization.</i></p>
                  <a href="http://localhost/RUET%20ALUMNI/login.php" class="btn btn-success">Let's Visit</a>
                </div>
              </div>
            </div>

    </div>

    <!-- Call to Action Well -->
    <div id="news">
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body">
              <p class="text-white m-0">EVENTS AND NEWS.</p>
            </div>
        </div>
    </div>

<!-------event-------->
<?php
include "event.php";
?>
<!----end event----->



    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">Life goes great with bread and brother! ;)</p>
      </div>
    </div>

</div>

  <!-- Bootstrap core JavaScript -->


    
    <!-- Contact SECTION -->
    <!-- Contact SECTION -->
    <section class="contact">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="contact-right">
                            <form action="home.php" method="post" accept-charset="utf-8">
                                <h4>Send Message</h4>
                                <p>We expect your feedback. Do you like our page? Any suggestion you want to give!!</p>
                                
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name *" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email *" required="">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Message *                                                                                                                  (at most 1000 characters)" required=""></textarea>
                                </div>
                                <!-- <div id="submit-btn"> -->
                                    <!-- <a href="#" class="btn btn-general btn-yellow"  title="submit" role="button">Submit</a> -->
                                <!-- </div> -->
                                <!-- <button class="btnRegister" name = "submit"><span>Submit</span></button> -->
                                <button class="btn btn-danger" name="submit"><span>Submit</span></button>
                            </form> 

      <?php

        if(isset($_POST['submit']))
        {
            // echo 'hello';
            // echo "My name is shuvon";
            // echo '<script window.location="home.php" </script>';
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];           

            $query = "select * from regi WHERE email = '$email' ";
            $query_run = mysqli_query($conn,$query);

            if(mysqli_num_rows($query_run)==0)
            {
              echo '<script type="text/javascript" charset="utf-8" async defer> alert("Please do your Registration at first!") ; window.location="signin.php" </script>';
            }
            else
            {
                $query = "insert into feedback values('$name','$email','$message')";
                $query_run = mysqli_query($conn,$query);

                echo '<script type="text/javascript" charset="utf-8" async defer> alert("Message submitted successfully!!! Thanks for your Feedback") ; window.location="home.php" </script>';

            }
            
            
        }
            // echo '<script type="text/javascript" charset="utf-8"async defer> alert("Done") </script>'; -->
    ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="contact-left">
                            <h2>Contact with us </h2>
                            <p>For any further query, please contact with us!!!</p>
                            <ul class="social-list">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="office">
                                <ul class="office-details">
                                    <li><i class="fa fa-mobile"></i>+88 (0721) 750105</li><br>
                                    <li><i class="fas fa-map-marker-alt"></i>Chapai Nowabganj Highway, Talaimari Boyaliya <br>Rajshahi, Bangladesh</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

        

            </div>
        </div>
    </section>
    
<?php
  include "footer.php";
?>

</body>
</html>




