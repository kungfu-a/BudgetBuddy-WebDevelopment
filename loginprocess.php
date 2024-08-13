<?php 
    session_start();

    include('connect.php');

    if(isset($_POST['useraccounts']));
    {
        $user_unsafe=$_POST['email'];
        $pass_unsafe=$_POST['password'];

        $user = mysqli_real_escape_string($conn,$user_unsafe);
        $pass = mysqli_real_escape_string($conn,$pass_unsafe);

        $query=mysqli_query($conn,"SELECT * FROM useraccounts where email='$user' and password='$pass'")or die(mysqli_error($conn));

        $row=mysqli_fetch_array($query);

        $email=$row['email'];
        $id=$row['id'];
        $username = $row['username'];

        $counter=mysqli_num_rows($query);

        if ($counter == 0)
        {
            echo "<script type='text/javascript'>alert('Invalid email or Password!');
            document.location='loginpage.html'</script>";
        }
        
        else
        {
            $_SESSION['id']=$id;
            $_SESSION['email']=$email;
            $_SESSION['username']=$username;

            echo "<script type='text/javascript'>document.location='landingpage.php'</script>";
        }

    }
?>