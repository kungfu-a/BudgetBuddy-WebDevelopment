<?php 
    $conn = mysqli_connect('localhost','root','','budget_buddy');

    if(mysqli_connect_error()){
        echo 'MySQL Error: ' . mysqli_connect_error();
    }

    else{
        $query = "INSERT INTO useraccounts VALUES('$_POST[id]','$_POST[username]','$_POST[fname]', '$_POST[email]', '$_POST[password]')";
        if(mysqli_query($conn,$query)){
            echo '1 record added successfully';

            echo '<script> window.location.href = "loginpage.html" </script>';          
        }
        else{
            echo 'Error record not added.';
        }
    }      
?>