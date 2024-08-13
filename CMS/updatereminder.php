<?php 

include "connect.php";

session_start();

if(empty($_SESSION['id'])):
	header('Location:adminlogin.html');
endif;


if (isset($_POST['update'])) {

    $bill_id = $_POST['id'];

    $bill_name = $_POST['billname'];

    $user_email = $_POST['useremail'];

    $bill_amount = $_POST['billamount'];

    $sql = "UPDATE `billsreminder` SET `billname`='$bill_name', `useremail`='$user_email', `amount`='$bill_amount' WHERE `billID`='$bill_id'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo "<script> alert('Bills Record Successfully Updated'); </script>";
        echo "<script type='text/javascript'>document.location='viewreminder.php'</script>";

    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

if (isset($_GET['id'])) {

    $bill_id = $_GET['id']; 

    $sql = "SELECT * FROM `billsreminder` WHERE `billID`='$bill_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $bill_id = $row['billID'];

            $bill_name = $row['billname'];

            $user_email = $row['useremail'];

            $bill_amount = $row['amount'];

        } 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bill Update Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="update.css">
</head>

<body>

        <h2>Bill Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Bill Records:</legend>

            Bill ID:<br>

            <input type="text" name="id" value="<?php echo $bill_id; ?>" readonly>

            <br>
          

            User Email:<br>

            <input type="text" name="useremail" value="<?php echo $user_email; ?>">

            <br>

            Bill Name:<br>

            <input type="text" name="billname" value="<?php echo $bill_name; ?>">

            <br>

            Bill Amount:<br>

            <input type="text" name="billamount" value="<?php echo $bill_amount; ?>">

            <br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

<?php

    } else{ 

        header('Location: viewreminder.php');

    } 

}

?>