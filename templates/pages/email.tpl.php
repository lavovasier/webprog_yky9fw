<?php
try {
// Kapcsolódás
$pdo = new PDO('mysql:host=localhost;dbname=lavovasier90', 'lavovasier90', 'KovacsGergely90',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
$utasitas = "Select id, nev, email, szoveg From kapcsolat order by id DESC";
$eredm = $pdo->query($utasitas);
}
catch (PDOException $e) {
echo "Hiba: ".$e->getMessage();
}
?>

<body>
<h3 style="text-align:center;">Beérkezett üzenetek</h3>
<table>
<?php foreach ($eredm as $sor)
print "<tr><td>" . $sor['id'] . "</td>" . " <td>" . $sor['nev'] . "<td>" .$sor['email'] . "<td>" .$sor['szoveg'] . "</td></tr>";
?>
</table>
</body>
</html>
