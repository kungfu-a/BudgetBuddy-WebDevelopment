<?php

include "connect.php";
session_start();

if(empty($_SESSION['id'])):
	header('Location:adminlogin.html');
endif;

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "INSERT INTO `admin` (`fname`, `email`, `password`) VALUES ('$fname', '$email', '$password')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "<script> alert('Admin Account Successfully Created'); </script>";
        echo "<script type='text/javascript'>document.location='addadmin.php'</script>";

    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;

    }

    $conn->close();

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Admin Account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700&display=swap');

*{
  font-family: 'Work Sans', sans-serif;
}

		body {
			background-image: url(images/blue-gradient.jpg);
			font-family: Arial, sans-serif;
			font-size: 18px;
			color: #fff;
		}

        button {
            background-color: #1e90ff;
            color: white;
            padding: 10px 20px;
            font-size: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
         
        }

        button:hover {
            background-color: darkblue;
        }

		button:active {
			opacity: 0.5;
		}

	
		h2 {
            font-size: 36px;
            text-align: center;
            margin-top: 0;
            margin-bottom: 0;
			padding-bottom: 20px;


        }
		

		form {
			width: 50%;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border: 2px solid #0a1b25;
			border-radius: 10px;
		}

		legend {
			font-weight: bold;
			font-size: 24px;
			margin-bottom: 20px;
            color:#0a1b25
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-size: 20px;
            color: #0a1b25;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			font-size: 18px;
			border: 2px solid #ccc;
			border-radius: 4px;
		}

		input[type="submit"] {
			background-color: #0a1b25;
			color: #fff;
			padding: 10px 20px;
			font-size: 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			display: block;
			margin: 0 auto;
		}

		input[type="submit"]:hover {
			background-color: #1e90ff;
		}
	</style>
</head>

<body>

<div class="container">
        <button onclick="window.location.href='adminpanel.php'">Back</button>
        <h2>Add Admin Account</h2>
        <div></div>
    </div>

	<form action="" method="post">

		<fieldset>

			<legend>Personal information:</legend>

			<label>Full Name:</label>
			<input type="text" name="fname" required>

			<label>Email:</label>
			<input type="email" name="email" required>

			<label>Password:</label>
			<input type="password" name="password" required>

			<input type="submit" value="Submit" name="submit">

		</fieldset>

	</form>

</body>

</html>