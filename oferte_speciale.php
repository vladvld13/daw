<?php include('includes/header.php'); 
include('includes/navbar.php'); ?>

<div class="container" style="margin-top: 90px;"> 
    <div class="row">
        <div class="col-md-12">
            <h1 id="page_title">Last Minute</h1>
            <h3 style="text-align:center;">
                <?php
                    date_default_timezone_set('Europe/Bucharest');

                    $targetDate = new DateTime('2024-01-01 00:00:00');

                    $currentDate = new DateTime();

                    $interval = $currentDate->diff($targetDate);

                    echo "Valabile inca ";
                    echo $interval->format('%d zile, %h ore, %i minute');
                    ?>
            </h3>
        </div>
    </div>

</div>




<?php include('includes/footer.php'); ?>
