<?php 
    session_start();
    include('connect.php');      
    
    if(isset($_POST['expenseName']) && isset($_POST['expenseValue'])){
        $userid = $_SESSION['id'];
        $email = $_SESSION['email'];
        $title = $_POST['expenseName'];
        $amount = $_POST['expenseValue'];
        
        $query = "INSERT INTO budgetplanner (expenseID, userID, email, expensetitle, expenseamount) VALUES ('$_SESSION[expenseID]', '$userid','$email', '$title', '$amount')";
        
        if(mysqli_query($conn, $query)){
            $response = array('status' => 'success');
            echo json_encode($response);                    
        } else {
            $response = array('status' => 'error');
            echo json_encode($response);  
        }
    }
?>


