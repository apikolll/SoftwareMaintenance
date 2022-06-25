<?php include "controller/viewRReserv.php" ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manage Room Reservation</title>
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
    .box {
        width: 100%;
        }
        .container table {
        padding: 5px;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 #00aea6f0, 0 6px 20px 0 #00aea6f0;
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
          
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="../login/librarian.php">Home</a></li>
			  <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="../manage_book_record.php">Manage Book Record</a></li>
                  <li><a href="../manage_user/ManageUser.php">Manage User</a></li>
				  <li><a href="../manageFineModule/manageFineModule.php">Manage Fine</a></li>
				  <li><a href="managereserv.php">Manage Reservation</a></li>
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
                <h3 style="color: white;" class="animate__animated animate__fadeInDown">Manage Room Reservation</h3>
                <div class="container1">
                    <div class="box">
                    <h9 style="color: white;" class="display-4 text-center">View List of Room Reservation</h9>

                    <!---changes are made here --->

                    <div class="dd">
                     <form action="SearchRoom.php" method="post">
                     Search <input id="rad" type="text" name="searchroom">
                      <input type="submit">
                    </form>
                    </div>
                    
                    <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_GET['success']; ?>
                    </div>
                    <?php }?>

                    <?php if (mysqli_num_rows($result)){?>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Room Reservation ID</th>
                        <th scope="col">Borrower Name</th>
                        <th scope="col">Room ID</th>
                        <th scope="col">Room Name</th>
                        <th scope="col">Room Details</th>
                        <th scope="col">Reservation Datee</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $n = 0;
                    while($rows = mysqli_fetch_assoc($result)){
                        $n++;
                    ?>
                        <tr>
                        <th scope="row"><?=$n?></th>
                        <td><?=$rows['BorrowerName']?></td>
                        <td><?php echo $rows['RoomID']; ?></td>
                        <td><?php echo $rows['RoomName']; ?></td>
                        <td><?php echo $rows['RoomDetails']; ?></td>
                        <td><?php echo $rows['reservDate']; ?></td>
                        <td><a href="EditRReserv.php?RoomReservID=<?=$rows['RoomReservID']?>" 
                              class="btn btn-success">Edit</a>

                            <a href="controller/deleteRReserv.php?RoomReservID=<?=$rows['RoomReservID']?>" 
                              class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php  }?>
                    </tbody>
                    </table>
                    <?php  }?>
                    <div class="link-right">
                    <a href="MRoomReserv.php" class="btn btn-primary">Create</a>
                    </div>
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

</body>

</html>