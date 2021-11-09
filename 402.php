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
<body>
<h1>Ulesanne 403</h1>
<a href="../home.php">tagasi... Ulesanne</a>
<br>
<h2>1. 20 Checkbox tsukliga</h2>
<?php
$i=1;
while ($i<=20){
    echo "<input type='checkbox' id='$i' name='box[]' value='$i'>";
    echo "<label for='$i'>box ".$i."  </label<br>";
    $i++;
}

?>
<h2>2. 20 teksikasti tsukliga </h2>
<?php
$i=1;
while ($i<=20){
    echo "<input type='radio' id=r'$i' name='radio[]' value='$i'>";
    echo "<label for=r'$i'>radio ".$i."  </label<br>";
    $i++;
}
?>

<h2>3. 20 teksikasti tsukliga </h2>
<?php
$i=1;
while ($i<=20){
    echo "<input type='cell' id=c'$i' name='cell[]' value='$i'>";
    echo "<label for=c'$i'>cell ".$i."  </label<br>";
    $i++;
}
?>
</body>
</html>