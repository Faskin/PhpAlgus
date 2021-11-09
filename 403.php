<!DOCTYPE html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/1f326e6c46.js" crossorigin="anonymous"></script>
    <title>Ulesanne 403</title>
</head>
<h1>Ulesanne 403</h1>

<?php
$varv=array('Gold', 'CornflowerBlue', 'Coral', 'Blue', 'Azure', 'Aqua', 'Black','GhostWhite', 'Crimson', 'Cyan', 'AliceBlue', "Red", "Yellow", "Chocolate", "Orange");

for ($i =0; $i <15; $i++){
    echo "<span style='color: $varv[$i]'>$varv[$i]</span><br>";
}
?>
</html>
