<?php include('includes/header.php'); ?>
<?php include('connect.php'); ?>
<?php include('create_account_class.php'); ?>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $mismatch = FALSE;
        if($_POST['password'] == $_POST['confirm_password']){
            
            $signup = new Signup();
            $result = $signup->evaluate($_POST);

            if($result!= ""){
                echo $result;
            }
            else{
                header("Location: login.php");
                die;
            }

        }
        else{
            $mismatch = TRUE;
        }
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
                    <a class="nav-link active" aria-current="page" href="login.php">Log In</a>
                    </li>
                </ul>
                
                </div>
            </div>
            </nav>
        </div>
    </div>
</div>

<div class="container" id='registr' style="margin-top: 200px;">
    <h4>Creeaza un cont</h4>
    <img src="img/sun.png" alt="Imagine" style="position: absolute; right: 0px; top: 100px; max-height: 300px; max-width: 300px;">

    <form method="post">
            <input name="first_name" type="text" class="input_box" placeholder="nume"><br><br>
            <input name="second_name" type="text" class="input_box" placeholder="prenume" ><br><br>
            <input name="email" type="text" class="input_box" placeholder="email" ><br><br>
            <input name="password" type="password" class="input_box" placeholder="parola" ><br><br>
            <input name="confirm_password" type="password" class="input_box" placeholder="confirma parola" ><br><br><br>
            <input type="Submit" value="Inregistrare" class="submit_box" required>

    </form>

    <?php
        if($mismatch == TRUE){
            echo "password mismatch";
        }
    ?>

    <img src="img/palm.png" alt="Imagine" style="position: absolute; right: 100px; bottom: 150px; max-height: 900px; max-width: 900px;">
    <img src="img/sunbed.png" alt="Imagine" style="position: absolute; left: 0px; bottom: 150px; max-height: 900px; max-width: 900px;">
</div>

<?php include('includes/footer.php'); ?>