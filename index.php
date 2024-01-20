<?php
session_start();
include('includes/header.php'); 
include('connect.php'); 
include('login_class.php'); 


    if (isset($_SESSION['email'])){


        $id = $_SESSION['email'];
        $login = new Login();
        $result = $login->check_if_user_login($id);

        if ($result){
        }
        else{
            header("Location: login.php");
            die;
        }

    }
    else{
        header("Location: login.php");
        die;
    }

    include('includes/navbar.php'); 

    ?>



<div class="container">
    <div class="row" style="padding-top: 100px;">
        <a class="flip-box" href="milano.php" style="position: absolute; left: 20px;">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <img src="img/dst/milan.jpeg" alt="Dubai" style="width:300px;height:200px">
                </div>
                <div class="flip-box-back" href = "milano.php">
                    <h2>Milano</h2>
                    <p>Zboruri de la 26 euro/persoana</p>
                    <p>Cazari de la 100 euro/noapte</p>
                </div>
            </div>
        </a>


    <div style="position: absolute; left: 600px; top: 200px; ">
        <img src ='logox.png' style="width: 300px">
    </div>

    <div style="position: absolute; left: 650px; top: 500px;">
    <a href="vacante_externe.php"><button class="btn default" style="width:200px;height:30px; background-color: #3399FF; ">Vacante Externe</button></a>
    </div>

    <div style="position: absolute; left: 650px; top: 550px; ">
    <a href="vacante_romania.php"><button class="btn default" style="width:200px;height:30px; background-color: #3399FF;">Vacante Romania</button></a>
    </div>

    <div style="position: absolute; left: 650px; top: 600px; ">
    <a href="city_break.php"><button class="btn default" style="width:200px;height:30px; background-color: #3399FF;">City Break</button></a>
    </div>

    <div style="position: absolute; left: 650px; top: 650px; ">
    <a href="vacante_exotice.php"><button class="btn default" style="width:200px;height:30px; background-color: #3399FF;">Vacante Exotice</button></a>
    </div>



    <a class="flip-box" href="dubai.php" style="position: absolute; left: 1100px;">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <img src="img/dst/dubai2.jpeg" alt="Dubai" style="width:300px;height:200px">
                </div>
                <div class="flip-box-back" href = "dubai.php">
                    <h2>Dubai</h2>
                    <p>Zboruri de la 26 euro/persoana</p>
                    <p>Cazari de la 100 euro/noapte</p>
                </div>
            </div>
        </a>


    <div class="row" style="padding-top: 230px;">
        <a class="flip-box" href="monaco.php" style="position: absolute; left: 20px;">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <img src="img/dst/monaco.jpeg" alt="Monaco" style="width:300px;height:200px">
                </div>
                <div class="flip-box-back">
                    <h2>Monaco</h2>
                    <p>Zboruri de la 26 euro/persoana</p>
                    <p>Cazari de la 100 euro/noapte</p>
                </div>
            </div>
        </a>

        

        <a class="flip-box" href = "london.php" style="position: absolute; left: 1100px;">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <img src="img/dst/london.jpeg" alt="London" style="width:300px;height:200px">
                </div>
                <div class="flip-box-back">
                    <h2>London</h2>
                    <p>Zboruri de la 26 euro/persoana</p>
                    <p>Cazari de la 100 euro/noapte</p>
                </div>
            </div>
</a>
</div>


    <div class="row" style="padding-top: 230px;">
        <a class="flip-box" href="paris.php" style="position: absolute; left: 20px;">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <img src="img/dst/paris.jpeg" alt="Dubai" style="width:300px;height:200px">
                </div>
                <div class="flip-box-back">
                    <h2>Paris</h2>
                    <p>Zboruri de la 26 euro/persoana</p>
                    <p>Cazari de la 100 euro/noapte</p>
                </div>
            </div>
        </a>

        <a class="flip-box" href="lisbon.php" style="position: absolute; left: 1100px;">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <img src="img/dst/lisbon.jpeg" alt="lisbon" style="width:300px;height:200px">
                </div>
                <div class="flip-box-back">
                    <h2>Lisbon</h2>
                    <p>Zboruri de la 26 euro/persoana</p>
                    <p>Cazari de la 100 euro/noapte</p>
                </div>
            </div>
        </a>
    </div>

</div>


</div>

<?php include('includes/footer.php'); ?>

