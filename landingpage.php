<?php session_start();
	if(empty($_SESSION['id'])):
		header('Location:loginpage.html');
	endif;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Budget Buddy - Home Page</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" type="images/x-icon" href="styles/images/whitelogo.png">
		<link rel="stylesheet" type="text/css" href="styles/landingpage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<section class="headline">
			<header class="sticky">
				<div class="holder">
					<div class="sec-a">
						<h2 class="nav-name">BUDGET BUDDY</h2>
					</div>

					<div class="sec-d">
						<ul class="nav">
							<li><a href="budgetplanner.php">Budget Planner</a></li>
							<li><a href="billsreminder.php">Bills Reminder</a></li>
							<li><a href="about.html">About Us</a></li>
						</ul>
					</div>

					<div class="sec-a">
						<a href="logoutprocess.php">
							<button class="btn">Log Out</button>
						</a>						
					</div>

					<div class="clear-sec"> </div>
				</div>

				<div class="clear-sec"></div>
			</header>
			
			<div class="sec-d">
				<div class="sec-cont">
					<h1 class="title">The Smart Way To <br> Manage Your Money </h1>

					<p class="desc-1">
						The Budget Planner System will highlight an all-in-one resource that includes a budget  planner, money-saving advices and bills reminder.The user of the budget planner may enter all of their expenditures, and the system will calculate. The user may manage their bills in accordance with their income and expenses by adding reminders for bills and making notes. Here is the video tutorial on how to begin your budget buddy planner journey:
					</p>

					<button class="btn" onclick="logout()">
						Begin your Journey now
					</button>

					<div class="clear-sec"> </div>	
				</div>
			</div>

			<div class="sec-d">
				<br>
				<img src="styles/images/imgbanner.png" class="headline-img">
			</div>

			<div class="clear-sec"> </div>				
		</section>


		<section>
			<br><br><br><br>
			<div class="holder">
				<h2 class="title-2">DISCOVER THE BENEFITS OF CHOOSING US</h2>				
				<p class="desc-2"> </p>

				<div class="sec-b">
					<div class="box active">
						<i class="fa fa-user icon1"> </i>
						<br><br>
						<h2 class="title-3">User-Friendly</h2>
						<br>
						<p class="desc-3">
							Users may simply discover the information they're seeking for thanks to the Budget Buddy website's simple and straightforward interface. For a great user experience across all devices, the website's layout and design should be both aesthetically pleasing and responsive.
						</p>
					</div>
				</div>

				<div class="sec-b">
					<div class="box">
						<i class="fa fa-table icon1"></i>
						<br><br>
						<h2 class="title-3">Budget Planner System</h2>
						<br>
						<p class="desc-3">
							It helps individuals to manage their finances effectively by creating a clear overview of their income and expenses. This will help to know how to allocate their resources and set achievable financial goals, which can help to improve their overall financial well-being.
						</p>
					</div>
				</div>

				<div class="sec-b">
					<div class="box">
						<i class="fa fa-laptop icon1"></i>
						<br><br>
						<h2 class="title-3">Well Designed</h2>
						<br>
						<p class="desc-3">
							The visual design of the Budget Buddy website is distinct and unified, utilizing suitable font, graphics, and color schemes to improve user experience. Additionally, it is simple to use, with menus that are clear and material that is organized in a way that makes it easy for users to discover what they're looking for. 
						</p>
					</div>
				</div>

				<div class="clear-sec"> </div>
			</div>
		</section>
		<br><br>

		<section class="sec-colored">
			<br><br><br><br>
			<div class="holder">				
				<div class="sec-d">
					<h2 class="title">Begin your financial journey with our budget planner</h2>
					<br>
					<p class="desc-1">
						By registering to our website, you will have an access to premium features and functionalities of our budget planner system. Go, begin your financial journey with us. 
					</p>
					<button class="btn" onclick="logout()">
						Sign Up Now!
					</button>
				</div>

				<div class="sec-d" style="text-align: center;">
					<br>
					<img src="styles/images/phone.png" >
				</div>

				<div class="clear-sec"> </div>
				<br><br><br><br>
			</div>
		</section>

		<section>
			<br><br><br><br>
			<div class="holder">
				<div class="sec-d">
					<img src="styles/images/laptop.png">
				</div>

				<div class="sec-d">
					<h2 class="title-4">EMPOWER YOUR FINANCES, SIMPLIFY YOUR LIFE</h2>
					<br>
					<p class="desc-4">The ability to manage one's money successfully lowers the chance of financial failure and enhances overall financial well-being. 
						This is made possible by having a solid grasp of financial ideas and tactics. Learn more about important financial tips and advices:  </p>
						<button class="btn" onclick="window.location.href='tutorialpage.html'">Learn More</button>
				</div>

				<div class="clear-sec"> </div>
				<br><br><br><br>
			</div>
		</section>

		<section class="sec-colored">
			<br><br><br><br>
			<div class="holder">		
				<div class="sec-c">
					<ul class="foot-sec">
						<li><a href="#"><strong>The Budget Buddy </strong></a></li>
						<!-- <li><a href="signuppage.html">Sign Up Page</a></li>
						<li><a href="loginpage.html">Log In Page</a></li> -->
						<li><a href="budgetplanner.php">Budget Planner Page</a></li>
						<li><a href="billsreminder.php">Bills Reminder Page</a></li>
						<li><a href="#">Home</a></li>
					</ul>
				</div>

				<div class="sec-c">
					<ul class="foot-sec">
						<li><a href="about.html"><strong>About Us</strong></a></li>
						<li><a href="jdpwebsite.html">The JS Team Member 1</a></li>
						<li><a href="resume.html">The JS Team Member 2</a></li>
						<li><a href="tutorialpage.html">Learn more</a></li>
						
					</ul>
				</div>

				<div class="sec-a">
					<ul class="foot-sec">
						<li><a href="#"><strong>Support us on Social Media:</strong></a></li>
						<li>
							<a href="https://www.facebook.com/profile.php?id=100089996214140&mibextid=ZbWKwL">
								<i class="fa fa-facebook sicon-1"></i>
							</a>
							
							<a href="https://twitter.com/budgetbuddy01?t=GiIp6xjhmTdXiJese2XJlw&s=09">
								<i class="fa fa-twitter sicon-1"></i>
							</a>
							
							<a href="https://instagram.com/budgetbuddy01?igshid=ZDdkNTZiNTM=">
								<i class="fa fa-instagram sicon-1"></i>
							</a>
						</li>
					</ul>
				</div>

				<div class="clear-sec"> </div>
				<br> <br>
				<hr>

				<p class="last-sec">
					Budget Buddy - 2023 by the JS Devs Team
				</p>

				<br><br>
			</div>
		</section>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


		<script type="text/javascript">
			$('.box').click(function(){
				$('.box').removeClass("active");
				$(this).addClass("active");
			});
		</script>

		<script type="text/javascript">
			$(window).scroll(function(){
				var sticky = $('.sticky'), 
				scroll = $(window).scrollTop();

				if (scroll >= 100) sticky.addClass('fixed');
				else sticky.removeClass('fixed');
			});
		</script>

		<script>
			function logout() {
			//AJAX to call a PHP script that performs the logout operation
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					// Redirect the user to the login page or home page after logout
					window.location.href = "signuppage.html";
				}
			};
			xhttp.open("GET", "logoutprocess.php", true);
			xhttp.send();
		}
		</script>
	</body>
</html>