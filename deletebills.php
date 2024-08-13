<?php 
    session_start();

    include "connect.php"; 

    if (isset($_GET['billID'])) {

        $bill_ID = $_GET['billID'];

        $sql = "DELETE FROM `billsreminder` WHERE `billID`='$bill_ID'";

        $result = $conn->query($sql);

        if ($result == TRUE) {

            echo "<script> alert('1 Record Removed.'); </script>";
            echo "<script type='text/javascript'>document.location='billsreminder.php'</script>";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

?>