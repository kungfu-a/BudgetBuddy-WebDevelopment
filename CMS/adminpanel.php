<?php
	session_start();
    include('connect.php');

	if(empty($_SESSION['id'])):
		header('Location:adminlogin.html');
	endif;	

	// Count number of rows in admin table
	$sql_admin = "SELECT COUNT(*) FROM admin";
	$result_admin = mysqli_query($conn, $sql_admin);
	$admin_count = mysqli_fetch_array($result_admin);

	// Count number of rows in useraccounts table
	$sql_user = "SELECT COUNT(*) FROM useraccounts";
	$result_user = mysqli_query($conn, $sql_user);
	$user_count = mysqli_fetch_array($result_user);

	// Count number of rows in budget planner table
	$sql_user = "SELECT COUNT(*) FROM budgetplanner";
	$result_planner = mysqli_query($conn, $sql_user);
	$planner_count = mysqli_fetch_array($result_planner);

	// Count number of rows in bills reminder table
	$sql_user = "SELECT COUNT(*) FROM billsreminder";
	$result_reminder = mysqli_query($conn, $sql_user);
	$reminder_count = mysqli_fetch_array($result_reminder);

	$sql = "SELECT fname FROM admin WHERE id = '".$_SESSION['id']."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard | Budget Buddy</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="adminpanel.css">
  <link rel="icon" href="images/whitelogo.png">

  <style>
		.logout-btn{
			transition: opacity 0.2s ease;
		}

		.logout-btn:hover{
			opacity: 0.8;
		}

		.logout-btn:active{
			opacity: 0.5;
		}
  </style>
</head>
<body>
	<div class="page-title">
		<h1>Budget Buddy - Admin Dashboard</h1>
	</div>
	<div class="content">
		<div class="header">
			<a href="ADMINlogoutprocess.php" class="logout-btn">Logout</a>
		</div>
		<div class="totals">
			<h2>				
				<?php                       
                    echo '<pre>' . 'ADMIN ' . strtoupper($row['fname']) .'</pre>';
                ?> 
			</h2>
      	    <br>
			<div class="totals-item">
				<i class="fas fa-user"></i>
				<p>Users: <?php echo $user_count[0]; ?></p>
			</div>
			<div class="totals-item">
				<i class="fas fa-user-shield"></i>
				<p>Admins: <?php echo $admin_count[0]; ?></p>
			</div>
			<div class="totals-item">
				<i class="fas fa-wallet"></i>
				<p>Expenses: <?php echo $planner_count[0]; ?></p>
			</div>
			<div class="totals-item">
				<i class="fas fa-receipt"></i>
				<p>Bills: <?php echo $reminder_count[0]; ?></p>
			</div>
		</div>
		<div class="management">
			<h2><i class="fas fa-chart-pie"></i> Budget Buddy Data Management System</h2>
			<div class="management-buttons">
				<button style="background-color: #E81B2E"; onclick="window.location.href='viewplanner.php'">Planner</button>
				<button style="background-color: #33b249"; onclick="window.location.href='viewreminder.php'">Reminder</button>
			</div>
		</div>
		<div class="management">
			<h2><i class="fas fa-user-friends"></i> User Accounts Management System</h2>
			<div class="management-buttons">
				<button onclick="window.location.href='viewusers.php'">View Users</button>
				<div class="add-buttons">
					<button onclick="window.location.href='adduser.php'">Add User</button>
				</div>
			</div>
		</div>
		<div class="management">
			<h2><i class="fas fa-users-cog"></i> Admin Accounts Management System</h2>
			<div class="management-buttons">
				<button onclick="window.location.href='viewadmin.php'">View Admins</button>
				<!-- <div class="add-buttons">
					<button onclick="window.location.href='addadmin.php'">Add Admin</button>
				</div> -->
        </div>
</body>
</html>