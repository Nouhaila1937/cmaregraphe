<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA</title>
    <link rel="shortcut icon" href="data.png" type=image/x-icon>
    <pre>
    <h1><strong><u><ul><li>LES DONNEES DES UTILISATEURS</li></ul></u></strong></h1>
</pre>
</head>
<body>

</body>
</html>
<?php

    $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "radar"; 

    $conn = new PDO("mysql:host=$servername;dbname=$dbname" ,$username, $password );

    if($conn) {
      echo" ";}
      else{
        die($conn->connect_error);}

$affiche = $conn->query(' SELECT * FROM users');
echo'<table class="t1">';
echo '<tr>';
echo '<th>';
echo 'id';
echo '</th>';
echo '<th>';
echo 'nom';
echo '</th>';
echo '<th>';
echo'prenom';
echo '</th>';
echo '<th>';
echo 'email';
echo '</th>';
echo '<th>';
echo 'password';
echo '</th>';
echo '<th>';
echo 'telephone';
echo '</th>';
echo '<th>';
echo 'genre';
echo '</th>';
echo '</tr>';
while($ligne =$affiche->fetch()){
echo '<tr>';

echo '<td>';
    echo $ligne['id'];
echo '</td>';

echo '<td>';
    echo $ligne['nom'];
echo '</td>';

echo '<td>';
    echo $ligne['prenom'];
echo '</td>';

echo '<td>';
    echo $ligne['email'];
echo '</td>';

echo '<td>';
    echo $ligne['password'];
echo '</td>';

echo '<td>';
    echo $ligne['telephone'];
echo '</td>';
echo '<td>';
    echo $ligne['genre'];
echo '</td>';
echo '</tr>';
}
echo'</table>';
echo'<style> 
.t1 td,.t1.th{
  border : 1.5px solid black;
    padding: 10px;
}

 table{
  border-collapse: collapse;
  align:center;
   margin:0 auto; }

body{ background-image: linear-gradient( 135deg, #C2FFD8 10%, #465EFB 100%);}

</style>';
?>
