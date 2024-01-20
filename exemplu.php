<?php include('includes/header.php'); ?>

<?php
$url = 'https://www.google.com/';
$html = file_get_contents($url);

// Afișează conținutul paginii web
echo $html;
?>
