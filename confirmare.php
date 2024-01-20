<?php include('includes/header.php'); 
session_start(); 
include('includes/navbar.php'); 
include('connect.php');?>


<div class="container" id='registr' style="margin-top: 200px; text-align:left; padding-left:500px" >
    <h4><b><u>Confirmare rezervare</u></b></h4>
    <img src="img/sun.png" alt="Imagine" style="position: absolute; right: 0px; top: 100px; max-height: 300px; max-width: 300px;">
    <h4>Email: <?php echo $_SESSION['email']; ?></h4>
    <h4>De la: <?php echo $_SESSION['departure']; ?></h4>
    <h4>La: <?php echo $_SESSION['destination']; ?></h4>
    <h4>Data plecarii: <?php echo $_SESSION['dep_date']; ?></h4>
    <h4>Data intoarcerii: <?php echo $_SESSION['ret_date']; ?></h4>
    <h4>Hotelul: <?php echo $_SESSION['hotel']; ?></h4>
    <h4>Pret: <?php echo $_SESSION['pret']; ?> euro</h4>
    <img src="img/palm.png" alt="Imagine" style="position: absolute; right: 100px; bottom: 150px; max-height: 900px; max-width: 900px;">
    <img src="img/sunbed.png" alt="Imagine" style="position: absolute; left: 0px; bottom: 150px; max-height: 900px; max-width: 900px;">
</div>