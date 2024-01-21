<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>perfect</title>
    <link rel="shortcut icon" href="check.png" type=image/x-icon width="70px">
</head>
<body>
</body>
</html>

<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];
$telephone = $_POST['telephone'];
$genre = $_POST['genre']; 

//database connection 
$conn = new mysqli('localhost' , 'root' , '' , 'radar'); // the "i" stands for improved in mysqli //on peut écrire aussi mysqli-connect()
 if ($conn->connect_error) //vérification si la base de donnée existe ou non s'il y a un erreur va afficher le message si dessous

   { echo'<br><strong><i>'; 
    die('La connexion a échoué !!!'.$conn->connect_error); }

else {
    $db = $conn->prepare("insert into users(nom ,prenom ,email ,password ,telephone , genre ) values(?,?,?,?,?,?)");//on a mis users parce qu'on ait déjà dans la base de données radar c'est elle qui va nous permettre de rajouter les informations qui sont entrées par l'utilisateur à notre data

    $db->bind_param("ssssis", $nom ,$prenom ,$email ,$password ,$telephone , $genre);//va nous permettre de rentrer les variables qu'on va écrire ici dans la partie insert à la place de ?
    
    $db->execute();

    echo "
  <h1><center>L'opération est bien passée!! Bravo</centre></h1>
  <p>Clickez sur le boutton suivant pour revenir à la page de connexion .</p>
  <button><a href='login.php'>Login</a></button>";

    
} 
?>
