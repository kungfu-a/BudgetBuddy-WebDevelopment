<?php session_start();
    include('connect.php');

	if(empty($_SESSION['id'])):
		header('Location:loginpage.html');
	endif;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="icon" type="images/x-icon" href="styles/images/whitelogo.png">

        <title>Budget Buddy - Bills Reminder</title>

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap");

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }

            h3{
                margin-top: 20px;
                font-size: large;
                color: white;
            }

            .headline{
                background: #0a1b25 ;
                background-size: 625px;
            }
            
            .headline-img{
                float: right; 
                width: 70%; 
                margin-top: 9.5px; 
                margin-right: 20%;
            }
            
            
            .nav-name{
                float: right;
                color: #fff; 
                padding: 25px; 
                font-weight: bolder; 
                animation: textcolor 10s infinite, grow-shrink 10s infinite;
            }

            @keyframes textcolor{	
                0% {color: #dfdc42;}
                25% {color: rgb(214, 179, 247);}
                50% {color: rgb(6, 201, 81);}
                75% {color: #6ac9f5;}
                100% {color: #dfdc42;}
            }

            @keyframes grow-shrink {
                0% { font-size: 20px; }
                50% { font-size: 30px; }
                100% { font-size: 20px; }
            }
            
            .nav{
                font-weight: bolder;
                margin: 0 auto; 
                width: 450px; 
            }
            
            .nav li{
                float: left; 
                padding: 29.5px 25px; 
                list-style: none;
            }
            
            .nav li a{
                font-size: large;
                text-decoration: none; 
                color: #fff; 
            }
            
            .sec-a{
                float: left;
                width: 25%; 
            }
            
            .sec-d{
                float: left;
                width: 50%; 
            }
            
            .clear-sec{clear: both;}
            
            .holder{
                width: 1200px; 
                margin: 0 auto; 
                max-width: 100%;
            }
            
            .btn{  
                float: right;  
                padding: 12px 35px;
                background: #4a75ee;
                color: #fff;
                border: none;
                margin-bottom: 30px;
                margin-top: 25px;
                cursor: pointer;
                font-weight: bold;
                float: left;
            }

            .container {
                width: 500px;
                margin: auto;
                margin-top: 100px;
                text-align: center;
                max-width: 600px;
                padding: 20px;
                background-color: #0a1b25;
                border-radius: 10px;
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
            }

            .noteshistory {                
                margin: auto;
                margin-top: 100px;
                text-align: center;
                max-width: 70em;
                padding: 20px;
                background-color: #0a1b25;
                border-radius: 10px;
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
            }

            
            
            h1 {
                font-size: 48px;
                text-align: center;
                color: white;
                margin-top: 0;
            }
            
            form {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 20px;
            }
            
            input[type="text"] {
                width: 100%;
                padding: 10px;
                font-size: 24px;
                border-radius: 5px;
                border: none;
                margin-bottom: 10px;
            }

            input[type="number"] {
                width: 100%;
                padding: 10px;
                font-size: 24px;
                border-radius: 5px;
                border: none;
                margin-bottom: 10px;
            }

            ::placeholder {
                text-align: center;
            }
            
            button[type="submit"] {
                background-color: #4a75ee;
                color: white;
                border: none;
                border-radius: 5px;
                margin-top: 9px;
                padding: 10px 20px;
                font-size: 24px;
                cursor: pointer;                
            }
                        
            .bills ul {
                list-style: none;
                margin-top: 20px;
                padding: 0;
            }
            
            .bills ul li {
                background-color: #f5f5f5;
                padding: 10px;
                border-radius: 5px;
                margin-bottom: 10px;
                font-size: 24px;
                display: flex;
                justify-content: space-between;
            }
            
            .bills ul li span {
                margin-right: 20px;
            }

            
            input[type="text"] {
                padding: 10px;
                font-size: 16px;
                margin-right: 10px;
                width: 200px;
            }

            input[type="number"] {
                padding: 10px;
                font-size: 16px;
                margin-right: 10px;
                width: 200px;
            }
            
            button[type="submit"] {
                padding: 10px 20px;
                color: white;
                border: none;
                cursor: pointer;
            }

            button, .btn{
                transition: opacity 0.2s ease;
            }

            button:hover{
                opacity: 0.8;
            }
            
            button:active{
                opacity: 0.5;
            }

            #bill-list {
                margin-top: 20px;
            }
            
            #bill-list li {
                list-style: none;
                padding: 10px;
                margin-bottom: 10px;
                background-color: lightgray;
            }

            @media only screen and (max-width: 1200px) {
                .holder {
                    width: 90%;
                }
            }
            
            @media only screen and (max-width: 768px) {
                .nav {
                    width: 100%;
                }
                .nav li {
                    padding: 29.5px 10px;
                }
                .headline {
                    background-size: 300px;
                }
                .headline-img {
                    width: 100%;
                    margin-right: 0;
                    margin-top: 0;
                    margin-bottom: 20px;
                }
                .sec-a, .sec-d {
                    width: 100%;
                }
                .container {
                    width: 100%;
                }
                input[type="text"] {
                    width: 100%;
                }
                input[type="number"] {
                    width: 100%;
                }
            }
            
            @media only screen and (max-width: 576px) {
                h1 {
                    font-size: 36px;
                }
                .nav li {
                    padding: 29.5px 5px;
                }
                .btn {
                    padding: 12px 20px;
                }
                input[type="text"] {
                    font-size: 18px;
                    width: 80%;
                }
                input[type="number"] {
                    font-size: 18px;
                    width: 80%;
                }
                button[type="submit"] {
                    font-size: 18px;
                    padding: 8px 16px;
                }
            }
        

            /* table css */
            .table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            
            .table, thead, tr, th {
                background-color: #0a1b25;
                color: #fff;
                font-size: 20px;
                font-weight: normal;
                padding: 10px;
                text-align: center;
                border: 2px solid #fafafa;
            }
            
            .table, tbody, tr, td {
                font-size: 18px;
                padding: 10px;
                text-align: center;
                border: 2px solid #fafafa;
            }

            
            .editdelete {
                display: inline-block;
                padding: 10px 20px;
                font-size: 18px;
                font-weight: bold;
                text-align: center;
                text-decoration: none;
                color: #fff;
                background-color: #4a75ee;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: opacity 0.2s ease;
            }  
        </style>
    </head>

    <body>
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
                            <li><a href="budgetplanner.php">Budget Planner</a></li>
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

        <div class="container">
            <h1>Bills Reminder</h1>
            <form id="form" >
                <input type="text" id="bill-name" placeholder="Name of the bill" name="bill-name" required>
                <input type="number" id="bill-amount" placeholder="Amount" name="bill-amount" required>
                <button type="submit" id="addbill">Add Bill</button>
            </form>
            <ul class="bills" id="bill-list"> </ul>
        </div>  
        
        <div class="noteshistory">
            <h1>BILLS REMINDER HISTORY</h1>
            <?php                    
                $userID = $_SESSION['id'];

                $query = "SELECT * FROM billsreminder WHERE userID = '$userID'";
                $result = mysqli_query($conn, $query);
            ?>

            <table class="table">
                <thead>
                    <tr>                        
                        <th>Email</th>
                        <th>Bill Name</th>
                        <th>Amount</th>  
                        <th>Action</th>                       
                    </tr>
                </thead>                    
                    
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>                        
                        <td><?php echo $row['useremail']; ?></td>
                        <td><?php echo $row['billname']; ?></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td>                            
                            <a class="editdelete" href="deletebills.php?billID=<?php echo isset($row['billID']) ? $row['billID'] : ''; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>                    
            </table>
        </div>  


        <script>
            const form = document.getElementById("form");
            const billName = document.getElementById("bill-name");
            const billAmount = document.getElementById("bill-amount");
            const billList = document.getElementById("bill-list");
            const submitbutton = document.getElementById("addbill");  
            
            

            form.addEventListener("submit", (e) => {
            e.preventDefault();    
            
                

                //This is the AJAX request so we can insert the data into the budgetplanner database
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "insertbillsreminder.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        console.log(xhr.responseText);
                    }
                };
                
                xhr.send(`billname=${billName.value}&billamount=${billAmount.value}`);


                if (billName.value && billAmount.value) {
                    const li = document.createElement("li");
                    li.innerHTML = `${billName.value} - Php ${billAmount.value}`;
                    billList.appendChild(li);
                    billName.value = "";
                    billAmount.value = "";
                    if (billList.childElementCount === 1) {
                        const header = document.createElement("h3");
                        header.textContent = "Here is the list of your bills:";
                        billList.insertAdjacentElement("beforebegin", header);
                    }
                }             
                
            });

            
        </script>   
        
        
    </body>
</html>