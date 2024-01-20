<?php
session_start();
include('includes/header.php'); 
?>

<?php
function get_code($destination){

    if($destination == 'Bucuresti' || $destination == 'Bucharest'){
        return 'BUH';
    }
    elseif($destination == 'Milano' || $destination == 'Milan'){
        return 'MIL';
    }
    elseif($destination == 'Dubai'){
        return 'DXB';
    }
    elseif($destination == 'Abu Dhabi'){
        return 'AUH';
    }
    elseif($destination == 'London'){
        return 'LON';
    }

}

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $from = $_POST['from'];
    $to = $_POST['to'];
    $from_code = get_code($from);
    $to_code = get_code($to);
    $dep_date = $_POST['departure'];
    $ret_date = $_POST['return'];
     
    header("Location: https://www.vola.ro/flight_search/from/$from/to/$to/from_code/$from_code/to_code/$to_code/dd/$dep_date/rd/$ret_date/ad/1");
}
?>

<div class="container">
    <div class="row">
            <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightyellow; position: fixed;left:0;right:0;" >
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src ='logox.png' id="img"></a>

                
                </div>
            </div>
            </nav>
        </div>
    </div>
</div>

<div style = "text-align:center; padding-top:200px;padding-left: 500px">
<form method="post" style="background-color: lightyellow; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 10px; width: 500px; text-align: center;">
<h1><b>Cauta un Zbor </b></h1><br><br>
    <input name="from" class="input_box" type="text" placeholder="From"  style="background-color: white; text-align:center" required>
    <br><br>
    <input name="to" class="input_box" type="text" placeholder="To"  style="background-color: white;text-align:center" required>
    <br><br>
  <label for="Departure Date">Departure Date:</label>
  <br>
  <input type="date" class="input_box" id="departure" name="departure">
  <br>
  <label for="Return Date">Return Date:</label>
  <br>
  <input type="date" class="input_box" id="return" name="return">
  <br><br>
  <input type="submit" class="submit_box" value="Submit">

</form>



</div>
