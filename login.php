<?php
session_start(); 
include('includes/header.php'); ?>
<?php include('connect.php'); ?>
<?php include('login_class.php'); ?>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {       
            $login = new Login();
            $result = $login->check($_POST);

            if($result!= ""){
                echo $result;
            }
            else{
                header("Location: index.php");
                die;
            }
        }
    

?>

<?php

$DB = new database();
$query = 'select * from raport where id=1';
$answer = $DB->read($query)[0];

function increment_total($DB){
    $query_tot = "update raport set total = total + 1 WHERE id = 1";
    $DB->save($query_tot);
}

function increment_bucharest($DB){
    $query_buc = "update raport set bucuresti = bucuresti + 1 WHERE id = 1";
    $DB->save($query_buc);
}

function increment_romania($DB){
    $query_ro = "update raport set romania = romania + 1 WHERE id = 1";
    $DB->save($query_ro);
}

function increment_europe($DB){
    $query_eu = "update raport set europa = europa + 1 WHERE id = 1";
    $DB->save($query_eu);
}

// Numarul de accesari se incrementeaza la fiecare accesare a site-ului
increment_total($DB);
// Verific IP ul - tara, oras, 
$ip = $_SERVER['REMOTE_ADDR'];
$data = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));   //source: https://stackoverflow.com/questions/28012011/how-to-obtain-location-from-ipinfo-io-in-php
if($data->country == "RO"){
    increment_romania($DB);
} 
if($data->city == "Bucharest"){
    increment_bucharest($DB);
}
//source : https://gist.github.com/scottsweb/5300345
$eu_countries = array(
  "AT" => "Austria",
  "BE" => "Belgium",
  "BG" => "Bulgaria",
  "HR" => "Croatia",
  "CY" => "Cyprus",
  "CZ" => "Czech Republic",
  "DK" => "Denmark",
  "EE" => "Estonia",
  "FI" => "Finland",
  "FR" => "France",
  "DE" => "Germany",
  "GR" => "Greece",
  "HU" => "Hungary",
  "IE" => "Ireland",
  "IT" => "Italy",
  "LV" => "Latvia",
  "LT" => "Lithuania",
  "LU" => "Luxembourg",
  "MT" => "Malta",
  "NL" => "Netherlands",
  "PL" => "Poland",
  "PT" => "Portugal",
  "RO" => "Romania",
  "SK" => "Slovakia (Slovak Republic)",
  "SI" => "Slovenia",
  "ES" => "Spain",
  "SE" => "Sweden"
);

$country = $data->country;
if(array_key_exists($country, $eu_countries)){
    increment_europe($DB);
}





?>

<div class="container">
    <div class="row">
            <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightyellow; position: fixed;left:0;right:0;" >
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src ='logox.png' id="img"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="create_account.php">Creeaza un cont</a>
                    </li>
                </ul>
                
                </div>
            </div>
            </nav>
        </div>
    </div>
</div>

<div class="container" id='registr' style="margin-top: 200px;">
    <h4>Log In</h4>
    <img src="img/sun.png" alt="Imagine" style="position: absolute; right: 0px; top: 100px; max-height: 300px; max-width: 300px;">
    <form method="post">
        <div class="input_box">
            <input name="email" type="text" placeholder="email"  style="background-color: lightyellow;" required>
        </div>
        <div class="input_box">
            <input name="password" type="password" placeholder="parola"  style="background-color: lightyellow;" required>
        </div>
        <div class="input_box">
            <input type="Submit" value="Log In"  style="background-color: lightyellow;" required>
        </div>
    </form>
    <img src="img/palm.png" alt="Imagine" style="position: absolute; right: 100px; bottom: 150px; max-height: 900px; max-width: 900px;">
    <img src="img/sunbed.png" alt="Imagine" style="position: absolute; left: 0px; bottom: 150px; max-height: 900px; max-width: 900px;">
</div>


<?php include('includes/footer.php'); ?>