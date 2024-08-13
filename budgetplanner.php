<?php session_start();
    include('connect.php');

	if(empty($_SESSION['id'])):
		header('Location:loginpage.html');
	endif;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title and viewport -->
        <title>Budget Buddy - Budget Planner</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">       

        <!-- Favicon and stylesheets -->
        <link rel="icon" type="images/x-icon" href="styles/images/whitelogo.png">
        <link rel="stylesheet" type="text/css" href="styles/budgetplanner.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <!-- Navigation bar section -->
        <section class="headline">
            <header class="sticky">
                <div class="holder">
                    <div class="sec-a">
                        <h2 class="nav-name">                            
                            <?php                       
                                echo '<pre>' . 'HELLO ' . strtoupper($_SESSION['username']) .'</pre>';
                            ?> 
                        </h2>                         
                    </div>

                    <div class="sec-d">
                        <ul class="nav">
                        <li><a href="landingpage.php">Home</a></li>
                        <li><a href="billsreminder.php">Bills Reminder</a></li>
                        <li><a href="tutorialpage.html">Learn More</a></li>
                        </ul>
                    </div>

                    <div class="sec-a">
                        <a href="logoutprocess.php">
                            <button class="btn">Log Out</button>
                        </a>
                        
                    </div>

                    <div class="clear-sec"> </div>
                </div>

                <div class="clear-sec"> </div>
            </header>
        </section>
    
        <!-- Wallet balance and budget section -->
        
        <div class="bal-tab">             
            <h2 id="emailname" class="emailname username"> 
                BUDGET BUDDY WALLET BALANCE
            </h2> 

            <span id="balance-amount"> 0 </span>

            <h2>TOTAL BUDGET</h2> <span id="amount"> 0 </span>

            <h2> TOTAL EXPENSES</h2> <span id="expenditure-value"> 0 </span>
        </div>     
    
        
        <!-- Main wrapper section -->
        <div class="wrapper">
            <div class="container">
                <div class="sub-container">
                    <!-- Expenses Section-->
                    <div class="expenses-details-container" >
                        <h3>Expenses</h3>

                        <p class="hide error" id="product-title-error">
                            Please input the needed values.
                        </p>

                        <input type="text" class="expense-title" id="expense-title" placeholder="Input the Name of the Expense" name="expensetitle">

                        <input type="number" id="expense-amount" placeholder="Input the Total Amount of the Expense" name="expenseamount">

                        <button class="submit" id="submit-expense">
                            Submit Expense
                        </button>                        
                    </div>

                    <!-- Budget section -->
                    <div class="budget-total-container">
                        <h3>Budget</h3>

                        <p class="hide error" id="error-budget">
                            Please input the needed values.
                        </p>

                        <input type="number" id="budget-total" placeholder="Input Total Amount of Budget">

                        <button class="submit" id="budget-total-button">
                            Set Budget
                        </button>
                    </div>
                </div>                
            </div>

            <!-- Transaction history section -->
            <div class="transaction-history-list">
                <h3>Transaction Expenses Submitted</h3>
                <div class="list-container" id="list"> </div>
            </div>

            <div class="databasetransaction" id="databasetransaction">
                <h3>Transaction Expenses History</h3>       

                <?php                    
                    $userID = $_SESSION['id'];

                    $query = "SELECT * FROM budgetplanner WHERE userID = '$userID'";
                    $result = mysqli_query($conn, $query);
                ?>

                <table class="table">
                    <thead>
                        <tr>                            
                            <th>Email</th>
                            <th>Expense Title</th>
                            <th>Expense Amount</th>  
                            <th>Action</th>                       
                        </tr>
                    </thead>                    
                    
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>                            
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['expensetitle']; ?></td>
                            <td><?php echo $row['expenseamount']; ?></td>
                            <td>                                
                                <a class="editdelete" href="deletebudget.php?expenseID=<?php echo isset($row['expenseID']) ? $row['expenseID'] : ''; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>                    
                </table>
            </div>
        </div>

        <!-- JavaScript -->
        <script src="budgetplanner.js"></script>               
    </body>
</html>

