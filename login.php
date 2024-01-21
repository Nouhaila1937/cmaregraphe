<?php
 session_start();
$bdd=new PDO('mysql:host=localhost;dbname=radar','root','');//php data object
if(isset($_POST['formconnexion'])){
    if(!empty($_POST['email']) AND !empty($_POST['password']))//vérification de la transmission des identifiants
    { $requser = $bdd->prepare("SELECT * FROM users where email= ? and password= ?");
    	$requser->execute(array($_POST['email'],$_POST['password']));
    		$userexist = $requser->rowCount(); 
    		if($userexist == 1)  {  header("location:acceuil.php"); }
    		else {$erreur="Ce compte n'existe pas !!";}
}
else{  $erreur = "tous les champs doivent être remplis!!!"; }//s'ils sont vide le message apparait
}
//la détéction des erreurs au niveau de pdo est plus efficace que mysqli
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
	<link rel="shortcut icon" href=" man.png" type=image/x-icon>

</head>
<body>
<form method='POST' action="login.php">
	<div class="box" ><h1>Login</h1>

<h3><u>Email:</u></h3><input type="text" name="email"  placeholder="cdfyuy@gmail.com">

<h3><u>Password:</u></h3><input type="password" name="password" placeholder="**********">
<button type = "submit" value = "Envoyer" name="formconnexion">Envoyer</button>
<button>Reset</button> 

<button><a href ="test.php" target="blanck">Sign up</a></button>
	 </form>
    </div>
</body>
</html>

<?php
if(isset($erreur))
	{echo "<div class='t'><h3><strong><font color='#e91e63'>".$erreur.'</font></h3></strong></div>';}

echo '<style>


body{
    display: flex;
    margin: 4px 30px ;
    lenght: 70px;
    justify-content: center;
    align-items:center ;
    background-image: url("RT.jpg");
    background-position: left;
    padding: 0px;
    background-size: 1280px ;}



    .box{
        display: flex;
        flex-direction: column;
        padding: 5rem;
        border-radius: 19px;
        box-shadow: 4px 5px 31px 0px rgba(0,0,0,0.65);
        border: 2px black;
        background-position:center;
        background-repeat: no-repeat;
        text-align: center;
        color: black;
        padding-top: 2rem;}
                            


.box  input{
            border: 2px inset black;
            box-shadow: 4px 5px 31px 0px rgba(0,0,0,0.65);
            padding: 5px 10px;
            margin-bottom: 1rem;
            background-color: #f0f5ed;
            color: #2F4F4F;
            border-radius: 10px;
            width: 300px;
            height: 30px; }



 h1{text-align: center;}

 
  .box  button{
                border-radius: 10px;
                background-color: #e9eef2; 
                width: 90px;
                display:flex;   
                justify-content:center;
                margin-bottom:1px;}



button:hover {
    text-decoration:underline;
    text-transform: uppercase;
    padding: 4px; 
    width: 110px;
    height:33px;
    background-image: linear-gradient( 135deg, #90F7EC 10%, #32CCBC 100%);
    cursor:pointer;}



h3{ color: #f2f8ff;}


a{color: black;}


.t{ border-radius:19px;
    background-color:rgba(0,0,0,0.85);
    margin-left:20px;
    padding:7px;
    height:70px;}


</style>';
?>