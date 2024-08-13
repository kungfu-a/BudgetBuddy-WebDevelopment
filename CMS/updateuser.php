<?php 

include "connect.php";

session_start();

if(empty($_SESSION['id'])):
	header('Location:adminlogin.html');
endif;


if (isset($_POST['update'])) {

    $user_id = $_POST['id'];

    $fname = $_POST['fname'];

    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "UPDATE `useraccounts` SET `fname`='$fname',`username`='$username',`email`='$email',`password`='$password' WHERE `id`='$user_id'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo "<script> alert('User Record Successfully Updated'); </script>";
        echo "<script type='text/javascript'>document.location='viewusers.php'</script>";

    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `useraccounts` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $id = $row['id'];

            $f_name = $row['fname'];

            $user_name = $row['username'];

            $email = $row['email'];

            $password  = $row['password'];

        } 

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Update Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="update.css">
</head>

<body>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Full Name:<br>

            <input type="text" name="fname" value="<?php echo $f_name; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            User Name:<br>

            <input type="text" name="username" value="<?php echo $user_name; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            Password:<br>

            <input type="password" name="password" value="<?php echo $password; ?>">

            <br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

<?php

    } else{ 

        header('Location: viewusers.php');

    } 

}

?>