<?php 
    session_start();
    include('connect.php');      
    
    if(isset($_POST['billname']) && isset($_POST['billamount'])){
        $userid = $_SESSION['id'];
        $email = $_SESSION['email'];
        $name = $_POST['billname'];
        $amount = $_POST['billamount'];
        
        $query = "INSERT INTO billsreminder (userID, useremail, billname, amount) VALUES ('$userid','$email', '$name', '$amount')";
        
        if(mysqli_query($conn, $query)){
            $response = array('status' => 'success');
            echo json_encode($response);                    
        } else {
            $response = array('status' => 'error');
            echo json_encode($response);  
        }
    }
?>


