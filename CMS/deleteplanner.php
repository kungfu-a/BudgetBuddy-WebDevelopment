<?php 
    session_start();

    include "connect.php"; 

    if(empty($_SESSION['id'])):
        header('Location:adminlogin.html');
    endif;


    if (isset($_GET['expenseID'])) {

        $expense_ID = mysqli_real_escape_string($conn, $_GET['expenseID']);

        $sql = "DELETE FROM `budgetplanner` WHERE `expenseID`='$expense_ID'";

        $result = $conn->query($sql);

        if ($result == TRUE) {

            echo "<script> alert('Expense Record Successfully Deleted'); </script>";
            echo "<script type='text/javascript'>document.location='viewplanner.php'</script>";

        }

        else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

?>