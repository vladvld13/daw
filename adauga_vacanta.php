<?php
session_start(); 
include('includes/header.php'); ?>
<?php include('connect.php'); ?>
<?php include('login_class.php'); ?>
<?php include('includes/navbar.php'); ?>


<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $type = $_POST['tip_vacanta'];
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $dep_date = $_POST['dep_date'];
    $ret_date = $_POST['ret_date'];
    $hotel = $_POST['hotel'];
    $pret = $_POST['pret'];

    $query = "insert into $type (departure, destination, dep_date, ret_date, hotel, pret) values ('$departure', '$destination', '$dep_date', '$ret_date', '$hotel', '$pret')";
    $DB = new database();
    $DB->save($query);

}



?>

<div class="container" id='add_vac' style="margin-top: 200px; text-align:center;">
    <h4>Adauga o vacanta</h4>
    

    <form method="post">
            <select name="tip_vacanta" class="input_box">
                <option value="vacante_externe">Vacante Externe</option>
                <option value="vacante_romania">Vacante Romania</option>
                <option value="city_break">City Break</option>
                <option value="vacante_exotice">Vacante Exotice</option>
            </select><br><br>
            <input name="departure" type="text" class="input_box" placeholder="Locul de plecare" ><br><br>
            <input name="destination" type="text" class="input_box" placeholder="Destinatia" ><br><br>
            Plecare:<input name="dep_date" type="date" class="input_box" placeholder="data plecare" ><br><br>
            Intoarcere:<input name="ret_date" type="date" class="input_box" placeholder="data intoarcere" ><br><br>
            <input name="hotel" type="text" class="input_box" placeholder="Hotel" ><br><br>
            <input name="pret" type="number" class="input_box" placeholder="Pret in euro" ><br><br><br>
            <input type="Submit" value="Adauga" class="submit_box" required>

    </form>



</div>