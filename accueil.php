<?php  

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
    <link rel="stylesheet" type="text/css" href="css/accueil.css">
    <title>Accueil</title>
</head>
<body>
<header>
<div style=" background-color: #d9a5b3" class="div-header">
<div  class="aaaa" >

<a class="aa" href="inscrire.php">S'inscrire</a>
<a  class="aa" href="seconnecter.php">Se connecter</a>

</div>
<p class="logo-header"><a href="accueil.php">know</a></p>
</div>





</header>

<main class="main">
<h4 class="question">YOU WANT TO KNOW ABOUT WHAT ?</h4>
<!-- <div > <img style="width: 50% ;  display: block; margin-left: auto; margin-right: auto;" class="image-main" src="photos/image.jpg" alt="image"></div> -->
<div class="choix">
<article> <a style="color: #1868ae" href="countries&cities.php">Countries & Cities</a></article>
<article><a style="color: #1868ae" href="animals.php">Animals</a></article>
<article><a style="color: #1868ae" href="food.php">Food</a></article>
<article><a style="color: #1868ae" href="#">hchh</a></article>
</div>
</main>
    
<footer class="footer">
    <div>
        <p style=" text-align: center ; padding: 15px"><a class="contact-footer" href="">contact</a></p>
    </div>
</footer>

<script>

    // const btnheader= document.getElementById('bouttonheader');
    // btnheader.addEventListener('click', function (event) {
    //     event.preventDefault();

    //     let para = document.createElement("p");
    //     let node = document.createTextNode("this is new");
    //     para.appendChild(node);

    //     let div = document.getElementById("div-header");
    //     div.appendChild(para);
    // })

</script>
</body>
</html>