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
    $LateReturnDay = validate($_POST['LateReturnDay']);
    $ReturnStatus = validate($_POST['ReturnStatus']);

    $ReturnData = 'BorrowerName'.$BorrowerName. 'ISBN'.$ISBN. 'BookName'.$BookName. 'BorrowDate'.$BorrowDate. 'ReturnDate'.$ReturnDate. 'LateReturnDay'.$LateReturnDay. 'ReturnStatus'.$ReturnStatus ;

    if (empty($BorrowerName)){
        header("Location: ../MReturn.php?error=Borrower Name is required&$BookReservData");
    }elseif (empty($ISBN)){
        header("Location: ../MReturn.php?error=ISBN is required&$BookReservData");
    }elseif (empty($BookName)){
        header("Location: ../MReturn.php?error=Book Name is required&$BookReservData");
    }
    elseif (empty($BorrowDate)){
        header("Location: ../MReturn.php?error=Borrow Date is required&$BookReservData");
    }
    elseif (empty($ReturnDate)){
        header("Location: ../MReturn.php?error=Return Date is required&$BookReservData");
    }
    elseif (empty($LateReturnDay)){
        header("Location: ../MReturn.php?error=Late Return Day is required&$BookReservData");
    }
    elseif (empty($ReturnStatus)){
        header("Location: ../MReturn.php?error=Return Status is required&$BookReservData");
    } 
    else{
        $sql = "INSERT INTO returnbook(BorrowerName, ISBN, BookName, BorrowDate, ReturnDate, LateReturnDay, ReturnStatus) 
                VALUES ('$BorrowerName', '$ISBN', '$BookName', '$BorrowDate', '$ReturnDate', '$LateReturnDay', '$ReturnStatus')";

        $result = mysqli_query($conn,$sql);

        if ($result) {
            header("Location: ../viewReturn.php?success=successfully created");
        }else {
            header("Location: ../MReturn.php?error=unknown error occur&$ReturnData");
        }

    }



}
?>