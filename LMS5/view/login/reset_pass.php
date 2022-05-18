<?php
    $conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <style>
	input[type=text]
	{
		width: 40%;
		padding: 10px;
	}
	
	table, tr, th, td
	{
		border: 3px solid black;
		border-collapse: collapse;
		padding: 5px;
		text-align: left;
		background: white;
	}
	
	th
	{
		background: #ffd600;
		color: black;
	}

  body{
    height: 100vh;
  }

   #button {
     padding: 8px 15px;
     border-radius: 5px;
     margin-right: 10px;
     border: none;
   }

   #email{
       text-align:center;
       height: 40px;
   }

  #t1{
    width:30%;
  }
  
    #button 
	{
	  background-color: #ffd600;
	  color: black;
	  padding: 20px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 20px;
	  font-weight: bold;
	  cursor: pointer;
	  width: 15%;
	  border-radius: 5px;
	}

	#button:hover 
	{
	  background-color: black;
	  color: #ffd600;
	}
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a>Library Management System</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
        <form class="form" method="POST">
          <div class="carousel-item active" style="background-image: url(assets/img/book/book1.jpg)">
            <div class="carousel-container">
              <div class="container my-auto shadow">
                <h2 class="animate__animated animate__fadeInDown">Forgot Your Password ?</h2>
                <!-- Add error message-->
				<center>
					<table>
						<p>Enter your e-mail address and we'll send you a link to reset your password.</p>
                        <tr>
                        
                            <input type="text" id="user_email" name="user_email" placeholder="Enter your email"><br><br>
							<input type="button" id="button" name="Back" value="Back" onclick="location.href='userLogin.php'">
                            <input type="submit" id="button" name="emailSubmit" value="Submit" onclick="myFunction()" ><br><br>
							
							<?php
							//check email entered or not
							if(isset($_POST['emailSubmit']))
							{
								if(empty($_POST['user_email']))
								{
									header("location:reset_pass.php?emailEmpty= <b>! Please Fill in your email !</b>");
								}
							}
							?>
							
							<?php
						if(@$_GET['emailEmpty']==true)
						{
							?>
								<div class="alert-light text-danger text-center py-3"><?php echo $_GET['emailEmpty'] ?></div>                                
							<?php
								}
							?>
                            
						 </tr>
            
					</table><br>
					
				</center>
              </div>
            </div>
          </div>
        </form>  
        </div>

    </div>

    <script>
	function myFunction() 
	{
        alert("An email has been sent to your address with a reset password you can use to access your account.");
    }
    </script>

  </section><!-- End Hero Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>LIBRARY MANAGEMENT SYSTEM</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>