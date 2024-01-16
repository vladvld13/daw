<?php
include('includes/header.php'); ?>
<?php include('connect.php'); ?>

<?php

session_start();

if (isset($_POST['choice'])) {
    if ($_POST['choice'] === 'Yes') {
        $email = $_SESSION['email'];
        //$query = "delete from clients where email = '$email'";

        $DB = new database();
        $answer = $DB->delete($email);
        
        header("Location: index.php");
        
    } elseif ($_POST['choice'] === 'No') {
        header("Location: index.php");
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
                    <a class="nav-link active" aria-current="page" href="index.php">Take me back</a>
                    </li>
                </ul>
                
                </div>
            </div>
            </nav>
        </div>
    </div>
</div>

<div class="container" id='registr' style="margin-top: 200px;">
    <h3>Your account will be deleted</h3>
    <h4>Are you sure?</h4>
    <img src="img/sun.png" alt="Imagine" style="position: absolute; right: 0px; top: 100px; max-height: 300px; max-width: 300px;">
    <form method="post">
        <input type="submit" name="choice" value="Yes">
        <input type="submit" name="choice" value="No">
    </form>
    <img src="img/palm.png" alt="Imagine" style="position: absolute; right: 100px; bottom: 150px; max-height: 900px; max-width: 900px;">
    <img src="img/sunbed.png" alt="Imagine" style="position: absolute; left: 0px; bottom: 150px; max-height: 900px; max-width: 900px;">
</div>

<?php include('includes/footer.php'); ?>