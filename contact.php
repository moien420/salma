<?php 
include "config.php";


  if (isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email= $_POST['email'];
    $gender = $_POST['gender'];
    
    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `gender`) VALUES ('$first_name','$last_name','$email','$gender')";
    $result = $conn->query($sql);
    if (!$result == TRUE) {
        echo "Error:". $sql . "<br>". $conn->error;
    }
      
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AinPal</title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif+Caption&display=swap" rel="stylesheet">
   <!--Google Font-->

   <!--Font Aweasome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Font Aweasome-->

    <!--Favifon-->
    <link rel="icon" type="image/png" href="./logo.png">
    <!--Favifon-->

    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!--Boostrap-->

    <!--css link-->
    <link rel="stylesheet" href="Style.css">
    <!--css link-->
 
</head>
<body>
     <!--nav start  hear-->

     <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand " href="./Index.html"><img src="./logo.png" style="width:50px ;height: 50pz;padding-left: 10px;" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-3" >
              <li class="nav-item ">
                <a  class="nav-link text-center text-white active"  aria-current="page" href="./Index.php">Home</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link text-center text-white" aria-current="page" href="./service.php">Service</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link text-center  dropdown-toggle text-white" type="text" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="cursor:pointer;">
                      Service Area
                    </a>
                    <ul class="dropdown-menu  bg-primary ">
                      <li><a class="dropdown-item text-dark" href="#1">Business & Corporate</a></li>
                      <li><a class="dropdown-item text-dark" href="#2">Land & Real Estate</a></li>
                      <li><a class="dropdown-item text-dark" href="#3">Labour & Employment</a></li>
                      <li><a class="dropdown-item text-dark" href="#4">Family Matters</a></li>
                      <li><a class="dropdown-item text-dark" href="#5">Securities law</a></li>
                      <li><a class="dropdown-item text-dark" href="#6">Banking</a></li>
                      <li><a class="dropdown-item text-dark" href="#7">Intellectual Property</a></li>
                      <li><a class="dropdown-item text-dark" href="#8">Tax, VAT & Customs</a></li>
                      <li><a class="dropdown-item text-dark" href="#9">Ecommerce and Cyber Law</a></li>
                      <li><a class="dropdown-item text-dark" href="#10">Criminal Matters</a></li>
                      <li><a class="dropdown-item text-dark" href="#11">Litigation</a></li>
                      <li><a class="dropdown-item text-dark" href="#12">Alternative Dispute Resolution</a></li>
                    </ul>
                </li>
              <li class="nav-item">
                <a class="nav-link text-center text-white" aria-current="page" href="./Teams.php">Team</a>
              </li> 

              <li class="nav-item ">
                <a class="nav-link text-center text-white" aria-current="page" href="./fees.php">Fees</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link text-center text-white" aria-current="page" href="./Index.php#blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center
                text-white" aria-current="page" href="./contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<br><br> 
        <!--nav end  hear-->

       <!--Contact and map section start  hear-->

        <section id="contact">
        <div id="contact" class="bg-secondary">
        <div class="container pt-5">
          <div class="row">
            <div class="col-12 col-sm-12">
              <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Paramount Heights, Suite 7D1, 65/2/1 Culvert Road, Dhaka&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
          </div>
        </div>
        <br>
        <div class="container">
          <div class="row">
              <div class="col-12 col-md-6 pb-1">
                  <div class="card">
                      <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
                      </div>
                      <div class="card-body">
                      <form id="myform" action="" method="POST">
                        <fieldset>
                          <input class="form-control" placeholder="Enter Your Name" requard type="fname" type="text" id="fname" name="firstname">
                          <br>
                          <input class="form-control" placeholder="Enter Your Last Name" id="lname"requard type="lname" type="text" name="lastname">
                          <br>
                          <input class="form-control" placeholder="Enter Your Email" id="email" type="email" name="email">
                          Gender:<br>
                          <input type="radio" name="gender" value="Male">Male
                          <input type="radio" name="gender" value="Female">Female
                          <br><br>
                          <input class="btn btn-primary"type="submit" name="submit" value="submit">
                        </fieldset>
                      </form>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 ">
                  <div class="card bg-light mb-3">
                      <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                      <div class="card-body pb-1">
                          <p>Feel free to call or mail us.</p>
                          <p>Suite-7D1, 65/2/1, Culvert Road,  Purana Paltan, Dhaka-1000.</p>
                          <p>Email:ainpal@outlook.com</p>
                          <p>Email:ainpal@gmail.com</p>
                          <p>Phone:(+88) 0715488451</p>
                          <p>Hot-Line:(+88) 0715488451</p>
                          <!--<button id="fees.html" type="button" class="btn btn-primary btn-md btn-block message">Message Us</button>-->
                        </div>
                      </div>
                  </div>
            </div>
      </div>
      <br>
    </div>
  </section>
  <!--Contact and map section end  hear-->
  <!--Footer section start  hear-->
  <section id="footer " class="bg-primary text-light text-justify" >
    <div class="container-fluid ">
      <div class="row mx-5">
        <div class="col-md-3 mt-5" style="border-right: 1px solid red;">
        <h4>About Us</h4>
        <hr >
        
        <p>Lorem ipsum dolor sit amet,Phasellus imperdiet.<span id="dots">...</span><span id="more">erisque enim dolor. </span></p>
        <button class="readmore" onclick="myFunction()" id="myBtn">Read more</button>

        </div>
        <div class="col-md-3 mt-5" style="border-right: 1px solid red;">
          <h4>Contact Us</h4>
          <hr>
          <h6>Mobile-01723323189</h6>
          <p6>Email-ainpal@gmail.com</p6>
          <h6>www.ainpal.com</h6>
          <h6>Hot Line-09000001</h6>
        </div>
        <div class="col-md-3 mt-5 " style="border-right: 1px solid red;">
          <h4>Quaik Links</h4>
          <hr>
          <h6>Link Number-1</h6>
          <p6>Link Number-2</p6>
          <h6>Link Number-3</h6>
          <h6>Link Number-3</h6>
      </div>
        <div class="col-md-3 mt-5" >
          <h4>Media Icon</h4>
          <hr>
          <a href="https://www.facebook.com/ainpalbd/" target="_blank" class="fa fa-facebook"></a>
          <a href="https://twitter.com/i/flow/login" target="_blank" class="fa fa-twitter"></a>
          <a href="https://bd.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
          <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a>
          <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
        </div>
      </div>
      </div>
    </div>
    <div class="copy bg-dark">
      <p>@2022 Copyright:AinPal.com</p>
    </div>
  </section>
  <!--Footer section end  hear-->
    <!--Java Script-->
  <script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }

    
    







    const constraints = {
       fname: {
           presence: { allowEmpty: false }
       },
       lname: {
           presence: { allowEmpty: false },
           email: true
       },
       email: {
           presence: { allowEmpty: false },
           email: true
       },
      
   };

   const form = document.getElementById('contact-form');

   form.addEventListener('submit', function (event) {
     const formValues = {
         fname: form.elements.name.value,
         lname: form.elements.name.value,
         email: form.elements.email.value,
        
     };

     const errors = validate(formValues, constraints);

     if (errors) {
       event.preventDefault();
       const errorMessage = Object
           .values(errors)
           .map(function (fieldValues) { return fieldValues.join(', ')})
           .join("\n");

       alert(errorMessage);
     }
   }, false);








    </script>
     <!--Java Script-->
    
     <!--Boostrap-->

      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--Boostrap-->

    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
</body>
</html>