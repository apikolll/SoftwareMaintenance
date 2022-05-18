<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
?>

<!DOCTYPE html>
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
	
	input[type=text], input[type=password]
	{
		width: 100%;
		padding: 10px;
	}
	
	#border 
	{
	  background-color: black;
	  padding: 30px;
	  border-radius:30px;
	  width: 35%;
	}

  body
  {
    height: 100vh;
  }

  button 
   {
     padding: 10px 15px;
     border-radius: 5px;
     margin-right: 10px;
     border: none;
   }

  .error
  {
    padding: 10px; 
    border-radius: 5px;
		margin: 10px 0px;
  }

  #t1
  {
    width:30%;
  }

  #button 
  {
     padding: 8px 15px;
     border-radius: 5px;
     margin-right: 10px;
     border: none;
   }

   .help-block 
   {
    color:white;
    text-decoration: underline;
  }
  
  #alert
  {
	  background-color: black;
  }
  
    input[type=submit] 
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
	  width: 77%;
	  border-radius: 5px;
	}

	input[type=submit]:hover 
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
		
        <form action="authentication.php" method="post">
          <div class="carousel-item active" style="background-image: url(assets/img/book/book1.jpg)">
            <div class="carousel-container">
              <div class="container my-auto shadow">
			    <center>
				<div id="border"><br><br>
					<h2 class="animate__animated animate__fadeInDown">LOGIN</h2>
						<table>
							<tr>
								<th>Username</th>
								<td><input type="text" id="username" name="username" placeholder="Enter username"></td>
							</tr>
							
							<tr>
								<th>Password</th>
								<td><input type="password" id="password" name="password" placeholder="Enter Password"></td>
							</tr>
							
						</table><br>
						
						  <p class="help-block">
							<a href="reset_pass.php"><small>Forgot your password?</small></a>
						  </p>
						<input type="submit" id="button" name="Login" value="Login" href="view_profile.php?UpdatePro=<?php echo $librarianID ?>"><br><br>
				</div>
					
					<?php
						if(@$_GET['Empty']==true)
						{
					?>
						<br><br><fieldset>
						<div id="alert" class="alert-light text-danger text-center py-2"><?php echo $_GET['Empty'] ?></div>  
						</fieldset>
					<?php
						}
					?>


					<?php 
						if(@$_GET['Invalid']==true)
						{
					?>
						<br><br><fieldset>
						<div id="alert" class="alert-light text-danger text-center py-2"><?php echo $_GET['Invalid'] ?></div>   
						</fieldset>
					<?php
						}
					?>
          
				</center>
              </div>
            </div>
          </div>
        </form>  
        </div>

    </div>
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
