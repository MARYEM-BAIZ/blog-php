<?php  

try {
    $baseblog= new PDO ('mysql:host=localhost;dbname=blog-blog;charset=utf8','root','');
} catch (exception $e) {
    echo " la connexion a échoué " ." <br>";
}    


     $foodmorocco=$baseblog->prepare('select * from food where country="Morocco"  ');
     $foodmoroccooo=$foodmorocco->execute(array());
    //   var_dump($foodmoroccooo);
    //   echo "  <br> ";


    $foodegypt=$baseblog->prepare('select * from food where country="Egypt"  ');
    $foodegypttt=$foodegypt->execute(array());
    var_dump($foodegypttt);
    echo "  <br> ";


    $foodsouthafrica=$baseblog->prepare('select * from food where country="South Africa"  ');
    $foodsouthafricaaa=$foodsouthafrica->execute(array());
    var_dump($foodsouthafricaaa);
    echo "  <br> ";


    $foodzimbabwe=$baseblog->prepare('select * from food where country="Zimbabwe"  ');
    $foodzimbabweee=$foodzimbabwe->execute(array());
    var_dump($foodzimbabweee);
    echo "  <br> ";


    $foodkenya=$baseblog->prepare('select * from food where country="Kenya"  ');
    $foodkenyaaa=$foodkenya->execute(array());
    var_dump($foodkenyaaa);
    echo "  <br> ";


    $foodnigeria=$baseblog->prepare('select * from food where country="Nigeria"  ');
    $foodnigeriaaa=$foodnigeria->execute(array());
    var_dump($foodnigeriaaa);
    echo "  <br> ";

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
    <link rel="stylesheet" type="text/css" href="food.css">
    <title>Countries&Cities</title>
</head>
<body>
    
<header>
    <div style=" background-color: #d9a5b3" class="div-header" >
    <div  class="aaaa" >

<a class="aa" href="inscrire.php">S'inscrire</a>
<a  class="aa" href="seconnecter.php">Se connecter</a>

</div>
<p class="logo-header"><a href="accueil.php">know</a></p>
</div>
    </header>


    <main class="main">
    <!-- morocco -->
     <div class="slide hi-slide">
          <div class="hi-prev"></div>
          <div class="hi-next"></div>
          <p class="pp">Morocco</p>
          <ul>

                
          <?php  while ($foodmorocco1=$foodmorocco->fetch()) {?>
              <li>
              <img src="<?php echo $foodmorocco1['image'] ?>" alt="image">
              <p><?php echo $foodmorocco1['dishe'] ?></p>
              </li>
          <?php }   ?>
            
          </ul>

     </div>
     <!-- egypt -->
     <div class="slide hi-slide">
          <div class="hi-prev"></div>
          <div class="hi-next"></div>
          <p class="pp">Egypt</p>
          <ul>

                
          <?php  while ($foodegypt1=$foodegypt->fetch()) {?>
              <li>
              <img src="<?php echo $foodegypt1['image'] ?>" alt="image">
              <p><?php echo $foodegypt1['dishe'] ?></p>
              </li>
          <?php }   ?>
            
          </ul>

     </div>
     <!-- south africa -->
     <div class="slide hi-slide">
          <div class="hi-prev"></div>
          <div class="hi-next"></div>
          <p class="pp">South Africa</p>
          <ul>

                
          <?php  while ($foodsouthafrica1=$foodsouthafrica->fetch()) {?>
              <li>
              <img src="<?php echo $foodsouthafrica1['image'] ?>" alt="image">
              <p><?php echo $foodsouthafrica1['dishe'] ?></p>
              </li>
          <?php }   ?>
            
          </ul>

     </div>
     <!-- zimbabwe -->
     <div class="slide hi-slide">
          <div class="hi-prev"></div>
          <div class="hi-next"></div>
          <p class="pp">Zimbabwe</p>
          <ul>

                
          <?php  while ($foodzimbabwe1=$foodzimbabwe->fetch()) {?>
              <li>
              <img src="<?php echo $foodzimbabwe1['image'] ?>" alt="image">
              <p><?php echo $foodzimbabwe1['dishe'] ?></p>
              </li>
          <?php }   ?>
            
          </ul>

     </div>
     <!-- kenya -->
     <div class="slide hi-slide">
          <div class="hi-prev"></div>
          <div class="hi-next"></div>
          <p class="pp">Kenya</p>
          <ul>

                
          <?php  while ($foodkenya1=$foodkenya->fetch()) {?>
              <li>
              <img src="<?php echo $foodkenya1['image'] ?>" alt="image">
              <p><?php echo $foodkenya1['dishe'] ?></p>
              </li>
          <?php }   ?>
            
          </ul>

     </div>
     <!-- nigeria -->
     <div class="slide hi-slide">
          <div class="hi-prev"></div>
          <div class="hi-next"></div>
          <p class="pp">Nigeria</p>
          <ul>

                
          <?php  while ($foodnigeria1=$foodnigeria->fetch()) {?>
              <li>
              <img src="<?php echo $foodnigeria1['image'] ?>" alt="image">
              <p><?php echo $foodnigeria1['dishe'] ?></p>
              </li>
          <?php }   ?>
            
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