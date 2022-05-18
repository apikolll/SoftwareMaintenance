<?php 
if (isset($_POST['create'])) {
    include "../DatabaseCon.php";
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $BorrowerName = validate($_POST['BorrowerName']);
    $ISBN = validate($_POST['ISBN']);
    $BookName = validate($_POST['BookName']);
    $BorrowDate = validate($_POST['BorrowDate']);
    $ReturnDate = validate($_POST['ReturnDate']);

    $BookReservData = 'BorrowerName'.$BorrowerName. 'ISBN'.$ISBN. 'BookName'.$BookName. 'BorrowDate'.$BorrowDate. 'ReturnDate'.$ReturnDate;

    if (empty($BorrowerName)){
        header("Location: ../MBookReserv.php?error=Borrower Name is required&$BookReservData");
    }elseif (empty($ISBN)){
        header("Location: ../MBookReserv.php?error=ISBN is required&$BookReservData");
    }elseif (empty($BookName)){
        header("Location: ../MBookReserv.php?error=Book Name is required&$BookReservData");
    }
    elseif (empty($BorrowDate)){
        header("Location: ../MBookReserv.php?error=Borrow Date is required&$BookReservData");
    }
    elseif (empty($ReturnDate)){
        header("Location: ../MBookReserv.php?error=Return Date is required&$BookReservData");
    }else{
        $sql = "INSERT INTO bookreservation(BorrowerName, ISBN, BookName, BorrowDate, ReturnDate) 
                VALUES ('$BorrowerName', '$ISBN', '$BookName', '$BorrowDate', '$ReturnDate')";

        $result = mysqli_query($conn,$sql);

        if ($result) {
            header("Location: ../viewBReserv.php?success=successfully created");
        }else {
            header("Location: ../MBookReserv.php?error=unknown error occur&$BookReservData");
        }

    }



}
?>