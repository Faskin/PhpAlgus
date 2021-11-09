<?php
//andmed massiivis
$data=[
    "Nimi"=>"Aleksei Staiger",
    "aadress"=>"Ringi 13",
    "pilt"=> "guy.png",
    "koduleht"=>"https://staiger19.thkit.ee"
];
?>
<br>
<a href="../home.php">tagasi... Ulesanne</a>
<h1>Ulesanne 401</h1>

<p> <b>
        <?=$data["Nimi"]?>
    </b>
</p>
<p><i>

    <?=$data["aadress"]?>
    </i>
</p>
<img src="<?=$data["pilt"]?>" " alt="pildike">
<a href="<?=$data["koduleht"]?>" target="_blank">Aleksei Staiger koduleht</a>

<?php
$array=array("Aleksei Staiger", "Ringi 13", "guy.php", "staiger19.thkit.ee");
echo "<b>Nimi:".$array[0]."</b><br>";
echo "<i>Aadress:".$array[1]."</i><br>";
echo "<img src='$array[2]' alt='pildike'>";
echo "<br><a href='hhtps://$array[3]'>Koduleht</a>";
?>