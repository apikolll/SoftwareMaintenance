<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Room Rented Records Report</title>

    <!-- Favicons -->
    <link href="assets/img/ByteThis.co logo.png" rel="icon">

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
        * {
          box-sizing: border-box;
        }

        #myInput {
          background-image: url('assets/img/searchicon.png');
          background-position: 10px 12px;
          background-repeat: no-repeat;
          width: 60%;
          font-size: 16px;
          padding: 12px 20px 12px 40px;
          border: 1px solid #ddd;
          margin-bottom: 12px;
        }

        #myUL {
          list-style-type: none;
          padding: 0;
          margin: 0;
        }

        #myUL li a {
          border: 1px solid #ddd;
          margin-top: -1px; /* Prevent double borders */
          background-color: #f6f6f6;
          padding: 12px;
          text-decoration: none;
          font-size: 18px;
          color: black;
          display: block
        }

        #myUL li a:hover:not(.header) {
          background-color: #eee;
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
      		background: #d3d3d3;
      		color: black;
      	}

        .arrow 
		    {
			    position: absolute;
		    	padding: 3rem; /* Arrow size */
			    box-shadow: 1px -1px 0 1px plum inset;
			    -webkit-box-shadow: 2px -2px plum inset;
			    border: solid transparent;
			    border-width: 0 0 2rem 2rem;
			    transition: 0.2s;
		    }
		
		    .arrow:hover 
	    	{
			    box-shadow: 2px -2px 0 2px orchid inset;
			    -webkit-box-shadow: 4px -4px orchid inset;
	    	}
		
		    .arrow { top:50%;margin:-67px 0 0 -650px;left:35% }
		    a:nth-child(2) { left:125% }
    
		    .arrow-up    { transform:rotate(135deg) }
		    .arrow-right { transform:rotate(225deg) }
		    .arrow-down  { transform:rotate(-45deg) }
		    .arrow-left  { transform:rotate(45deg) }
    </style>

  </head>


  <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid">

          <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
              <h1 class="logo"><a href="../login/librarian.php">Library Management System</a></h1>

              <nav id="navigateBar" class="navigateBar">
				<ul>
				  <li><a href="../login/librarian.php">Home</a></li>
				  <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
					  <li><a href="../manage_book_record/manage_book_record.php">Manage Book Record</a></li>
					  <li><a href="../manage_user/ManageUser.php">Manage User</a></li>
					  <li><a href="../manageFineModule/manageFineModule.php">Manage Fine</a></li>
					  <li><a href="../manage_reservation/managereserv.php">Manage Reservation</a></li>
					  <li><a href="reportMain.php">Report</a></li>
					</ul>
				  </li>
				  <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
					  <li><a href="../manage_user/view_profile.php">View Profile</a></li>
					  <li><a href="../login/logout.php?logout">Log Out</a></li>
					</ul>
				  </li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			  </nav><!-- .navbar -->
		  
            </div>
          </div>
        </div> <!-- settle header-->
      </header><!-- End Header -->

      <! middle/centre section title>
      <section id="hero">
      <div class="hero-container">

          <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="background-image: url(assets/img/book/book1.jpg)">
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">Room Records</h2>
                  <p class="animate__animated animate__fadeInUp">Search for room record, download and view reports are available</p>

                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Room ID, Room Name or Room Type" title="Type in a name"><br><br>

                  <center>
          						<table style="width:100%">
          							<tr>
          								<th>No.</th>
                          <th>Room ID</th>
          								<th colspan="2">Room Name</th>
                          <th colspan="2">Room Type</th>
                          <th>Remarks</th>
                          <th>Action</th>
          							</tr>
          						</table><br>

          				</center>
                </div>
              </div>
            </div>

          </div>

      </div><! middle settle tapi tak masuk css dlm list lagi >
    <a class="arrow arrow-right" title="Go To Book Records" href="../GenerateReport/BookReport.php"></a>
	  <a class="arrow arrow-left" title="Go To Fine Records" href="../GenerateReport/FinedRecordReport.php"></a>
    </section>

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
