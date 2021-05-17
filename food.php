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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/food.css">
    <title>Countries&Cities</title>
</head>
<body>
    
<header>
    <div style=" background-color: #d9a5b3" >
<p class="logo-header"><a href="accueil.php">know</a></p>
</div>
    </header>


    <main class="main">

     <div class="slide hi-slide">
          <div class="hi-prev"></div>
          <div class="hi-next"></div>

          <ul>

                <p>Country</p>

              <li>
              <img src="img.jpg" alt="image">
              <h5>name</h5>
              </li>

              <li>
              <img src="img.jpg" alt="image">
              <h5>name</h5>
              </li>

              <li>
              <img src="img.jpg" alt="image">
              <h5>name</h5>
              </li>

              <li>
              <img src="img.jpg" alt="image">
              <h5>name</h5>
              </li>

              <li>
              <img src="img.jpg" alt="image">
              <h5>name</h5>
              </li>

              <li>
              <img src="img.jpg" alt="image">
              <h5>name</h5>
              </li>

              <li>
              <img src="img.jpg" alt="image">
              <h5>name</h5>
              </li>
          </ul>

     </div>

    </main>


    <footer class="footer">
    <div>
        <p style=" text-align: center ; padding: 15px"><a class="contact-footer" href="">contact</a></p>
    </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/jquery.hislide.js"></script>
    <script >

        $('.slide').hiSlide();

    </script>

</body>
</html>