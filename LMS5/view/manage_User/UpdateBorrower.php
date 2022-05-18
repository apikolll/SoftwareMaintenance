<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	$Borrower_ID = $_GET['GetBorrower'];
	$query = "SELECT * FROM borrower
				WHERE Borrower_ID='".$Borrower_ID."'";

	$result = mysqli_query($conn, $query);
	
	while($row=mysqli_fetch_assoc($result))
	{
		$Borrower_ID = $row['Borrower_ID'];
		$Borrower_name = $row['Borrower_name'];
		$Borrower_type = $row['Borrower_type'];
		$Borrower_Phone_num = $row['Borrower_Phone_num'];
		$Borrower_Address = $row['Borrower_Address'];
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Borrower Details</title>
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
		padding: 5px;
		text-align: left;
		background: white;
	}
	
	th
	{
		background: #ffd600;
		color: black;
		width: 20%;
	}
	
	td
	{
		width: 80%;
	}
	
	#saveButton
	{
		border-radius: 12px;
		padding: 15px 20px;
		font-color: black;
		background: #ffe033;
		text-align : center;
		font-size : 20px;
	}
	
	#saveButton:hover
	{
		background: black;
		color: #ffe033;
	}
	
	#backButton
	{
		border-radius: 12px;
		padding: 15px 20px;
		font-color: black;
		background: #ffe033;
		text-align : center;
		font-size : 20px;
	}
	
	#backButton:hover
	{
		background: black;
		color: #ffe033;
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
                  <li><a href="ManageUser.php">Manage User</a></li>
				  <li><a href="../manageFineModule/manageFineModule.php">Manage Fine</a></li>
				  <li><a href="../manage_reservation/managereserv.php">Manage Reservation</a></li>
				  <li><a href="../GenerateReport/reportMain.php">Report</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="ProfileOption.html#">View Profile</a></li>
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
                <h2 class="animate__animated animate__fadeInDown">Update Borrower Details</h2>
                <p class="animate__animated animate__fadeInUp">Please fill in the details below to update details about the borrower</p>
				
				<form action="updateBorrowerForm.php?Borrower=<?php echo $Borrower_ID ?>" method="POST">
				<input type="hidden" name="action" value="update">
					<center>
						<table>
							<tr>
								<th>Borrower ID</th>
								<td><input  type="text" id="Borrower_ID" name="Borrower_ID" value="<?php echo $Borrower_ID ?>" disabled></td>
							</tr>
							
							<tr>
								<th>Name</th>
								<td><input type="text" id="Borrower_name" name="Borrower_name" value="<?php echo $Borrower_name ?>" ></td>
							</tr>
							
							<tr>
								<th>Type</th>
								<td><input type="text" id="Borrower_type" name="Borrower_type" value="<?php echo $Borrower_type ?>" ></td>
							</tr>
							
							<tr>
								<th>Phone Number</th>
								<td><input type="text" id="Borrower_Phone_num" name="Borrower_Phone_num" value="<?php echo $Borrower_Phone_num ?>"></td>
							</tr>
							
							<tr>
								<th>Address</th>
								<td><input type="text" id="Borrower_Address" name="Borrower_Address" value="<?php echo $Borrower_Address ?>"></td>
							</tr>
							
							<tr>
						</table><br>
						
						<input type="button" id="backButton" name="Back" value="Back" onclick="location.href='./BorrowerList.php'">
						<input type="submit" id="saveButton" name="Update" value="Save" onclick="updateBorrower()">
					</center>
				</form>
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
  
  <!-- Update Borrower Confirmation -->
  <script>
  function updateBorrower()
  {
	if (confirm("Please confirm all the details of the borrower is correct"))
	{
		alert("The borrower details was successfully updated");
	}
	else
	{
		alert("Cancelled");
	}
  }
  </script>

</body>

</html>