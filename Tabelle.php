<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
mysql_connect('localhost', 'root', 'Passwort1') or die(mysql_error());
mysql_select_db('anwesenheit') or die(mysql_error());

$sql = "SELECT * FROM Tabelle1";
$result = mysql_query($sql) or die("Fehler");
?>

<table cellpadding="1" cellspacing="1" border="1">
<tr>
<td>Name</td>
<td>Fachbereich</td>
<td>Anwesend</td>
</tr>

<?PHP
while ($row = mysql_fetch_array($result)) {
?>
<tr>
<td><?=$row['Name']?></td>
<td><?=$row['Fachbereich']?></td>
<td><?=$row['Anwesend']?></td>
</tr>

<?PHP
}
?>

</table>

</body>
</html>