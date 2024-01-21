<!DOCTYPE html>
<html>
<head>	<title>S'inscrire</title>
	<link rel="shortcut icon" href="i.png" type=image/x-icon ></head>
<body>
<form method="POST" action="sign-up.php"><!--**************************************--> 

<div class="box">
    <h4><u><strong>Information:</h4></u></strong>

<strong> Nom:<br></strong>

    <input type="text" name="nom" placeholder="entrer votre nom" >

    <br><br>

 <strong>Prenom:<br></strong>

    <input type="text" name="prenom" placeholder="entrer votre prenom" >

    <br><br>

    
  <strong>Email:<br></strong>
    <input type="email" name="email" placeholder="entrer votre email" >

    <br><br>

  <strong>Password:<br></strong>

    <input type="password" name="password" placeholder="entrer le mot de passe" min="4">

    <br><br>

<strong>Telephone:<br></strong>
    <input type="text" name="telephone"  placeholder="entrer un numero" > 
<br>
<pre>
  <strong>Genre:</strong>

             <input type="radio" name="genre" value="Male">  <strong>Homme</strong>   <input type="radio" name="genre" value="Female">  <strong>Femme </strong>
</pre>

<button>submit</button>

   <button> <a href="login.php" class="link">Login</a></button>
<br><br>
 </div>
</form> 
</html>

<?php
echo '<style>

 .box{
        text-align:center;
        border-radius: 10px;
        box-shadow: 10px 10px 31px 9px rgba(0,0,0,0.65);
        border: px darkgreen;
        padding-top: 0rem;
        background-image:url("p.png");
        background-repeat:no-repeat;
        background-position: left;
        margin:40px;
    }


 body{
        background: linear-gradient(132deg, rgb(224, 235, 213) 0.00%, rgb(37, 148, 141) 86.69%);
        /*la couleur du body*/
        background-repeat:no-repeat;
        background-size: 2000px ;
        margin-top:0px;
        padding-top: 0rem;
    }


 input{  
        border-radius:7px;
        box-shadow: 4px 5px 31px 0px rgba(0,0,0,0.65);
        background: linear-gradient(126deg, rgb(251, 251, 255) 0.00%, rgb(215, 223, 252) 100.00%);
      }


button{ border-radius:10px; }

button:hover{
                background:linear-gradient(90deg, rgb(63, 250, 86) 0%, rgb(228, 230, 77) 100%);
                box-shadow: 4px 5px 31px 0px rgba(0,0,0,0.65);
                border-radius:19px;
                text-transform: uppercase;
                padding: 3px; 
                width: 100px; 
            }

.link{  color:black;  }

.link:hover{ color:black; }

</style>'?>

