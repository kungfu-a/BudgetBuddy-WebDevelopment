<?php 
session_start();
include "connect.php"; 

if(empty($_SESSION['id'])):
	header('Location:adminlogin.html');
endif;


if (isset($_GET['id'])) {
    $bill_ID = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "DELETE FROM billsreminder WHERE billID='$bill_ID'";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('Bill Record Successfully Deleted'); </script>";
        echo "<script type='text/javascript'>document.location='viewreminder.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 
?>



