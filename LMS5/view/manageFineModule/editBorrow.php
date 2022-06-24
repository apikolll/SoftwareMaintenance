      

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fine Management</title>
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
	input[type=text], input[type=number], input[type=date]
	{
	  width: 100%;
	  padding: 10px;
	}
	
	table, tr, th, td
	{
		border: 3px solid black;
		border-collapse: collapse;
		padding: 7px;
		text-align: left;
		background: white;
	}
	
	th
	{
		background: #00aea6;
		color: black;
		width: 10%;
	}
	
	td
	{
		width: 120%;
	}
  </style>
  

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="../login/librarian.php">Library Management System</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="../login/librarian.php">Home</a></li>
			  <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="../manage_book_record/manage_book_record.php">Manage Book Record</a></li>
                  <li><a href="../manage_user/ManageUser.php">Manage User</a></li>
				  <li><a href="manageFineModule.php">Manage Fine</a></li>
				  <li><a href="../manage_reservation/managereserv.php">Manage Reservation</a></li>
				  <li><a href="../GenerateReport/reportMain.php">Report</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">View Profile</a></li>
                  <li><a href="../login/logout.php?logout">Log Out</a></li>
                </ul>
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/book/book1.jpg)">
            <div class="carousel-container">
              <div class="container">
         
<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	if(isset($_GET['ID']))
	{
		$id = $_GET['ID'];

		$query = "SELECT * FROM finerecord WHERE id = '".$id."'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($result);
?>                       

				<!-- insert books -->
				<form action="updateBorrow.php" method="post">
	
					<center>
						<table border="1">
						<th Colspan="3" style="text-align:center; background-color:#00aea6"><h5><b>FINE TABLE</b></h5></th>

							<tr>
								<th>ID</th>
								<td><input type="text" id="id" name="id" placeholder="ID" style="background-color:#E5E4E2" value="<?php echo $row['id'];?>" readonly></td>
							</tr>
							
							<tr>
								<th>Borrower Name</th>
								<td><input type="text" id="borrower_name" name="borrower_name" placeholder="Borrower Name" value="<?php echo $row['borrower_name'];?>" ></td>
							</tr>
							
							<tr>
								<th>Book Title</th>
								<td><input type="text" id="book_title" name="book_title" placeholder="Book Title" value="<?php echo $row['book_title'];?>" ></td>
							</tr>
							
							<tr>
								<th>ISBN</th>
								<td><input type="text" id="isbn" name="isbn" placeholder="ISBN" value="<?php echo $row['isbn'];?>" ></td>
							</tr>
							
							<tr>
								<th>Borrowed Date</th>
								<td><input type="date" id="borrowed_date" name="borrowed_date" placeholder="Borrowedmjjbhn                                              Date" value="<?php echo $row['borrowed_date'];?>" ></td>
							</tr>
							
							<tr>
								<th>Return Date</th>
								<td><input type="date" id="return_date" name="return_date" placeholder="Return Date" value="<?php echo $row['return_date'];?>" ></td>
							</tr>
						

						</table><br>
						<input type="button" value="Back " onclick="location.href='./manageFineModule.php'">
						<input type="submit" value="Update"  onclick="updateBorrowerDetails()">

						<input type="reset" value="Reset">
					</center>
				</form><?php }?>
              </div>
            </div>
          </div>

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
  
  <!-- Add Confirmation -->
  <script>
  function updateBorrowerDetails()
  {
	alert("Borrower details are successfully updated to the system");

  }
  </script>

</body>

</html>
