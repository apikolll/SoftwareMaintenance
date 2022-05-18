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
    $RoomID = validate($_POST['RoomID']);
    $RoomName = validate($_POST['RoomName']);
    $RoomDetails = validate($_POST['RoomDetails']);
    $reservDate = validate($_POST['reservDate']);

    $RoomReservData = 'BorrowerName'.$BorrowerName. 'RoomID'.$RoomID. 'RoomName'.$RoomName. 'RoomDetails'.$RoomDetails. 'reservDate'.$reservDate;

    if (empty($BorrowerName)){
        header("Location: ../MRoomReserv.php?error=Borrower Name is required&$RoomReservData");
    }elseif (empty($RoomID)){
        header("Location: ../MRoomReserv.php?error=Room ID is required&$RoomReservData");
    }elseif (empty($RoomName)){
        header("Location: ../MRoomReserv.php?error=Room Name is required&$RoomReservData");
    }
    elseif (empty($RoomDetails)){
        header("Location: ../MRoomReserv.php?error=Room Details is required&$RoomReservData");
    }
    elseif (empty($reservDate)){
        header("Location: ../MRoomReserv.php?error=Reservation Date is required&$RoomReservData");
    }else{
        $sql = "INSERT INTO roomreservation (BorrowerName, RoomID, RoomName, RoomDetails, reservDate) 
                VALUES ('$BorrowerName', '$RoomID', '$RoomName', '$RoomDetails', '$reservDate')";

        $result = mysqli_query($conn,$sql);

        if ($result) {
            header("Location: ../viewRReserv.php?success=successfully created");
        }else {
            header("Location: ../MRoomReserv.php?error=unknown error occur&$BookReservData");
        }

    }



}
?>