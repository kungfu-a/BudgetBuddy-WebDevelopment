<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:loginpage.html');
endif;
?>

<!DOCTYPE html>
<html>
    <body>
        <div style="width:150px;margin:auto;height:500px;margin-top:300px">

            <?php
            include('connect.php');
            session_destroy();

            echo '<meta http-equiv="refresh" content="2;url=loginpage.html">';
            echo '<progress max=100><strong>Progress: 70% done.</strong></progress><br>';
            echo '<span class="itext">Logging out...</span>';

            ?>
        </div>

    </body>
</html>