<?php

try{
$pdo = new  PDO('mysql:host=localhost;dbname=simplon.ci','root','');
}catch(PDOException  $ex){
$message = "Erreur";
echo  $message  .  ''  .$ex->getMessage();
}
 
if (isset($_POST['nom'], $_POST['prenoms'], $_POST['numero_telephone'], $_POST['email'])) {
    $nom = $_POST['nom'];
    $prenoms = $_POST['prenoms'];
    $numero_telephone = $_POST['numero_telephone'];
    $email = $_POST['email'];
 
    $save = "INSERT INTO participants(nom,prenoms,numero_telephone,email) VALUES(?,?,?,?)";
    if (isset($pdo)) {
        $ps = $pdo->prepare($save);
    }
    $ps->execute([$nom, $prenoms, $numero_telephone,$email]);
 
    header('Location:enregistrer.php');
}
 
?>

<!DOCTYPE html>
<html lang="An" dir="ltr">
<head >
  <meta charset="utf-8">
   <!--fontawesom CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <meta name="viewport" content="width=device-with,initial-scale=1.0">
     
    
    <title>Simplon.ci</title>
 
</head>


<body>
    <style >
    *{
    margin: 0;
    padding: 20;
    box-sizing:border-box;
    font-family:"poppins",sans-serif;
    
}
body{
    background-image: url(simplon.png);
  background-repeat: no-repeat;
  background-size: cover;
    min-height: 50vh;
    display: flex;
    align-items:center;
    justify-content:center;
    padding: 30px;
    
}
.container{
    max-width: 1000px;
    width: 100%;
    background: blue;
    padding: 219px 30px;
    box-shadow: rgba 0 5px 10px(0,0,0,0.2);
    
    
}
.container{
    position: relative;
    max-width: 850px;
    width: 100%;
    padding: 219.87px 60px;
    background: white;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    perspective: 2700px;
}
.container .form-content{
display: flex;
align-items:center;
justify-content:space-between;
    
}
.container form{
    
height: 100%;
width: 100%;
background: #fff;
}
.form-content .register-form,
.forme-content afficher-form{
    width: calc(100%/2-25px);
    /*background: aqua;*/
    
    
}
form .form-content .title{
    font-size: 24px;
    font-weight: 500px;
    color: #333;
}
form-content .title:before{
    content: '';
    position: absolute;
    height: 3px;
    background: #7d2ae8;
    
}
form .enregistrer-form .title:before{
    width: 20px;
}
form .form-content .input-boxes{
margin-top: 30px;
    
}
form .form-content .input-box{
    display: flex;
    align-items:center;
    height: 50px;
    width: 100%;
    margin: 0 10px;
    position: relative;
}
.form-content .input-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    padding: 0 30px;
    font-size: 16px;
    font-weight: 500px;
    border-bottom: 2px solid rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    
    
}
.form-content .input-box input:focus,
.form-content .input-box input:valid{
    border-color: #7d2ae8;
}
.form-content .input-box i{
    position: absolute;
    
    color:#7d2ae8;
    font-size: 20px;
}
.form-content .input-box .button{
    color: #fff;
    margin-top:40px;
    
}
form .form-content .button input{
    color: white;
    background: #7d2ae8;
    border-radius: 6px;
    padding: 0;
    cursor:pointer;
    transition:all 0.4s ease;
}
form .form-content .button input:hover{
    background: #5b13b9;
}
form .form-content label{
    color: #5b13b9;
    cursor: pointer;
}
form .form-content label:hover{
    text-decoration: underline;
    
}

.container .cover{
    position:absolute;
    top: 0;
    left: 50%;
    background:#7d2ae8;
    z-index: 98;
    height: 100%;
    width: 50%;
    transition: all 1s ease;
    transform-style: preserve-3d;
    transform-origin: left;
}
.container .cover::before{
    height: 50%;
    width: 50%;
    content: '';
    position: absolute;

}
.text {
  text-align: center;
  margin-top: 20px;
}

.text a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
}

.text a:hover {
  background-color: #555;
}



</style>
    <div class="container">
        <div class="cover">
            <div class="front">
                <img src="simplon1.png" alt="">
                <p><div class="text-box">
                    <i fas fa-user>bonjour simplon ci</i>
                </div></p>
            </div>
        </div>
            <form action="" method="post">
                <div class="form-content">
                    <div class="enregistrer-form">
                        <div class="title">Veuillez vous inscrire svp!!</div>
                        <div class="input-box">
                         <i class="fas fa-user"></i>
                         <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez votre nom" value="">
                        </div>
                        <div class="input-box">
                         <i class="fas fa-user"></i>
                         <input type="text" name="prenoms" id="prenoms" class="form-control" placeholder="Entrez votre nom" value="">
                        </div>
                        <div class="input-box">
                         <i class="fas fa-phone"></i>
                         <input type="text" name="numero_telephone" id="numero_telephone" class="form-control" placeholder="Entrez votre prenom" value="">
                        </div>
                        <div class="input-box">
                         <i class="fas fa-envelope"></i>
                         <input type="text" name="email" id="email" class="form-control" placeholder="Entrez votre email" value="">
                        </div>
                         <div class="button input-box">
         <i fas fa-register></i>
         <input type="submit" value="Enregistrer"
       </div>


                </div>
                <div class="text"><a href="consultation.php">consulter la liste des participants</a></div>


                
                
            </form>
        </div>
    </body>
    </html>
    