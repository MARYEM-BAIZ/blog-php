<?php  

session_start();


try {
    $baseblog= new PDO ('mysql:host=localhost;dbname=p-php-quiz;charset=utf8','root','');
} catch (exception $e) {
    echo " la connexion a échoué " ." <br>";
}    


if (isset($_POST['seconnecter']) ) {
   
    $email=strip_tags($_POST['email']);
    $email=htmlspecialchars($_POST['email']);


    $password=strip_tags($_POST['password']);
    $password=htmlspecialchars($_POST['password']);
      



       $verif=$baseblog->prepare('select * from user where email= ? and password = ? ');
       $verif->execute(array($email, $password));
    //    var_dump($verif->rowCount()) ; 
       $ligne = $verif->fetch(); 
      //  echo "<pre>";
      //   var_dump($ligne);
      //   echo "</pre>";
     if(isset($ligne['email'] ) && isset($ligne['password']) )
     {
         
               $_SESSION['username'] = $ligne['username']; 
               $_SESSION['id'] = $ligne['id']; 
               $_SESSION['avatar'] = $ligne['avatar']; 
               $_SESSION['email'] = $ligne['email']; 
               $_SESSION['naissance'] = $ligne['naissance']; 
               $_SESSION['genre'] = $ligne['genre']; 
              

            header('Location:accueil.php'); 
           
     }
     else {
         echo "There's an incorrect information or the email that you try to create is existing";
     }
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="seconnecter.css">
    <title>Se connecter</title>
</head>
<body>
<header>
<div style=" background-color: #d9a5b3" class="div-header">
<div  class="aaaa" >

<a class="aa" href="inscrire.php">S'inscrire</a>
<a style="margin-left: 20px;" class="aa" href="seconnecter.php">Se connecter</a>

</div>
<p class="logo-header"><a href="accueil.php">know</a></p>
</div>





</header>

<main class="main">

<div class="seconnecter">
  <form action=""  method="post"  enctype="multipart/form-data">
     
      <input class="input" type="email" name="email" placeholder="Email">
      <input class="input" type="password" name="password" placeholder="Password">

      <input  class="inputsubmit" type="submit" name="seconnecter" value="Sign In">
  </form>
  </div>

</main>
    
<footer class="footer">
    <div>
        <p style=" text-align: center ; padding: 15px"><a class="contact-footer" href="">contact</a></p>
    </div>
</footer>

</body>
</html>