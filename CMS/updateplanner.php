<?php

include "connect.php";

session_start();

if(empty($_SESSION['id'])):
	header('Location:adminlogin.html');
endif;

if (isset($_POST['update'])) {    

    $expense_id = $_POST['expenseID'];

    $expense_title = $_POST['expensetitle'];

    $expense_amount = $_POST['expenseamount'];    

    $sql = "UPDATE budgetplanner SET expensetitle='$expense_title', expenseamount='$expense_amount' WHERE expenseID='$expense_id'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo "<script> alert('Expense Record Successfully Updated'); </script>";
        echo "<script type='text/javascript'>document.location='viewplanner.php'</script>";

    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 


if (isset($_GET['expenseID'])) {
    $expenseID = $_GET['expenseID']; 
    $sql = "SELECT * FROM budgetplanner WHERE expenseID='$expenseID'";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $expense_id = $row['expenseID'];
            $expense_title = $row['expensetitle'];
            $expense_amount  = $row['expenseamount'];
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

        <h2>Expenses Record Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Expenses Record:</legend>

            Expense ID:<br>

            <input type="text" name="expenseID" value="<?php echo $expense_id; ?>" readonly>
            
            <br>

            Expense Title:<br>

            <input type="text" name="expensetitle" value="<?php echo $expense_title; ?>">

            <br>

            Expense Amount:<br>

            <input type="text" name="expenseamount" value="<?php echo $expense_amount; ?>">

            <br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

<?php

    } else{ 

        header('Location: viewplanner.php');

    } 

}
?>
