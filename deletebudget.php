<?php 
    session_start();

    include "connect.php"; 

    if (isset($_GET['expenseID'])) {

        $expense_ID = $_GET['expenseID'];

        $sql = "DELETE FROM `budgetplanner` WHERE `expenseID`='$expense_ID'";

        $result = $conn->query($sql);

        if ($result == TRUE) {

            echo "<script> alert('1 Record Removed.'); </script>";
            echo "<script type='text/javascript'>document.location='budgetplanner.php'</script>";

        }

        else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

?>