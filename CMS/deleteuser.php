<?php 

include "connect.php"; 

session_start();

if(empty($_SESSION['id'])):
	header('Location:adminlogin.html');
endif;

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `useraccounts` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "<script> alert('User Account Record Successfully Deleted'); </script>";
        echo "<script type='text/javascript'>document.location='viewusers.php'</script>";
    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>