<?php include('includes/header.php'); 
session_start(); 
ob_start();
include('includes/navbar.php'); 
include('connect.php');?>

<?php
    $DB = new database();
    $query = "select * from $table_name";
    $result = $DB->read($query);


?>

<div class="container" style="margin-top: 100px; font-family: Lucida Sans Typewriter,Lucida Console,monaco,Bitstream Vera Sans Mono,monospace; "> 
    <div class="row">
        <div class="col-md-12">
            <h1 id="page_title"><?php echo $page_title;?></h1>
            <h3 style="text-align:center;">

            <table style="border: 1px solid lightyellow;">
            <tr>
                <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><b>Cod</th>
                <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><b>Locul de plecare</th>
                <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><b>Destinatia</th>
                <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><b>Data plecarii</th>
                <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><b>Data intoarcerii</th>
                <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><b>Hotel</th>
                <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><b>Pret in Euro</th>
            </tr>

                <?php

                    for($i=0; $i<=count($result)-1; $i++){

                        ?>
                        <tr>
                        <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><?php print_r($result[$i]['id']) ?></th>
                        <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><?php print_r($result[$i]['departure']) ?></th>
                        <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><?php print_r($result[$i]['destination']) ?></th>
                        <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><?php print_r($result[$i]['dep_date']) ?></th>
                        <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><?php print_r($result[$i]['ret_date']) ?></th>
                        <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><?php print_r($result[$i]['hotel']) ?></th>
                        <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;"><?php print_r($result[$i]['pret']) ?></th>
                        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'user'){ ?>
                        <th style="font-size:20px; padding-left: 20px; padding-right: 20px; border: 1px solid lightyellow;">
                        <form method="post" action="">
                            <button type="submit" name=<?php echo $result[$i]['id'];?>>Cumpara!</button>
                        <?php }?>
                        </form>
                        </th>
                        </tr>
                                
                <?php

                    if(isset($_POST[$result[$i]['id']])){
                        $email = $_SESSION['email'];
                        $departure = $result[$i]['departure'];
                        $destination = $result[$i]['destination'];
                        $dep_date =  $result[$i]['dep_date'];
                        $ret_date = $result[$i]['ret_date'];
                        $hotel = $result[$i]['hotel'];
                        $pret = $result[$i]['pret'];

                        $query = "insert into rezervari (email, departure, destination, dep_date, ret_date, hotel, pret) values ('$email', '$departure', '$destination', '$dep_date', '$ret_date', '$hotel', '$pret')";
                        $DB = new database();
                        $DB->save($query);

                        $_SESSION['departure'] = $result[$i]['departure'];
                        $_SESSION['destination'] = $result[$i]['destination'];
                        $_SESSION['dep_date'] = $result[$i]['dep_date'];
                        $_SESSION['ret_date'] = $result[$i]['ret_date'];
                        $_SESSION['hotel'] = $result[$i]['hotel'];
                        $_SESSION['pret'] = $result[$i]['pret'];


                        
                        ob_end_clean();  //source: https://stackoverflow.com/questions/11035312/how-do-i-redirect-with-php-if-a-header-has-already-been-sent
                        header('Location: confirmare.php');


                    }
                    

                ?>



                <?php
                    }
                ?>
                </table>

                
            </h3>
        </div>
    </div>

</div>