<?php include('includes/header.php'); ?>
<?php include('connect.php');?>

<?php

$DB = new database();
$query = 'select * from raport where id=1';
$answer = $DB->read($query)[0];

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
                    <h2>Raport</h2>
                    </li>
                </ul>
                
                </div>
            </div>
            </nav>
        </div>
    </div>
</div> 
<div style = "padding-top: 100px">
<table>
  <tr>
    <td>Total Vizitatori : </td>
    <td><?php print_r($answer['total']); ?></td>
  </tr>
  <tr>
    <td>Vizitatori din Bucuresti : </td>
    <td><?php print_r($answer['bucuresti']); ?></td>
  </tr>
  <tr>
    <td>Vizitatori din Romania : </td>
    <td><?php print_r($answer['romania']); ?></td>
  </tr>
  <tr>
    <td>Vizitatori din Europa : </td>
    <td><?php print_r($answer['europa']); ?></td>
    
  </tr>

</table>
</div>