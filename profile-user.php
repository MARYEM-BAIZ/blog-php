<?php  

session_start();


try {
    $baseblog= new PDO ('mysql:host=localhost;dbname=blog-blog;charset=utf8','root','');
} catch (exception $e) {
    echo " la connexion a échoué " ." <br>";
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
    <link rel="stylesheet" type="text/css" href="css/profile-user.css">
    <title>User Profile</title>
</head>
<body>
<header>
<div style=" background-color: #d9a5b3" class="div-header">
<div  class="aaaa" >

<a class="aa" href="inscrire.php">S'inscrire</a>
<a style="margin-left: 20px;" class="aa" href="seconnecter.php">Se connecter</a>

</div>
<p style="  display: inline-block; margin-top:10px ; margin-left: 20px " > <a href=""> <img class="imageuser" src="<?php  echo $_SESSION['avatar'] ?>" alt="image"></a> <h6 class="nameuser" ><?php  echo $_SESSION['username'] ?></h6> </p>

<p class="logo-header"><a href="accueil.php">know</a></p>
</div>





</header>

<main class="main">



</main>
    
<footer class="footer">
    <div>
        <p style=" text-align: center ; padding: 15px"><a class="contact-footer" href="">contact</a></p>
    </div>
</footer>

</body>
</html>