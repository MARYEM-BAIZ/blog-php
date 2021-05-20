<?php  

session_start();

try {
    $baseblog= new PDO ('mysql:host=localhost;dbname=blog-blog;charset=utf8','root','');
} catch (exception $e) {
    echo " la connexion a échoué " ." <br>";
}    


      $animals=$baseblog->prepare('select * from animals  ');
      $animalsss=$animals->execute(array());
    //   var_dump($animalsss);
    //   echo "  <br> ";

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
    <link rel="stylesheet" type="text/css" href="css/animals.css">
    <title>Countries&Cities</title>
</head>
<body>
    
<header>
    <div style=" background-color: #d9a5b3" class="div-header" >
    <div  class="aaaa" >

<a class="aa" href="inscrire.php">S'inscrire</a>
<a style="margin-left: 20px;"  class="aa" href="seconnecter.php">Se connecter</a>

</div>
<p style="  display: inline-block; margin-top:10px ; margin-left: 20px " > <a href=""> <img class="imageuser" src="<?php  echo $_SESSION['avatar'] ?>" alt="image"></a> <h6 class="nameuser" ><?php  echo $_SESSION['username'] ?></h6> </p>

<p class="logo-header"><a href="accueil.php">know</a></p>
</div>
    </header>


    <main class="main">

    <table class="tableanimals">
    <thead >  
    <tr >
    <th class="ththeaad">Animal</th>
    <th class="ththeaad">Male</th>
    <th class="ththeaad">Female</th>            
    <th class="ththeaad">Baby</th>
    <th class="ththeaad">Group of Animals</th>
    </tr>
    </thead>

    <tbody>
    <?php  while ($animals1=$animals->fetch()) {?>
    <tr>
    <th class="thtbody"><?php echo $animals1['animal'] ?></th>
    <th class="thtbody"><?php echo $animals1['male'] ?></th>
    <th class="thtbody"><?php echo $animals1['female'] ?></th>
    <th class="thtbody"><?php echo $animals1['baby'] ?></th>
    <th class="thtbody"><?php echo $animals1['group of animals'] ?></th>
    </tr>
    <?php }   ?>
    </tbody>

    </table>

    </main>


    <footer class="footer">
    <div>
        <p style=" text-align: center ; padding: 15px"><a class="contact-footer" href="">contact</a></p>
    </div>
    </footer>

</body>
</html>