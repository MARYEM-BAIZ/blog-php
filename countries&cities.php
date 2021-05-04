<?php  

try {
    $baseblog= new PDO ('mysql:host=localhost;dbname=blog-blog;charset=utf8','root','');
} catch (exception $e) {
    echo " la connexion a échoué " ." <br>";
}    


if (isset($_POST['asia']) ) {

    $asia=$baseblog->prepare('select country from countries where continent="Asia" ');
    $asiaaa=$asia->execute(array());
    // var_dump($asiaaa);
    // echo "  <br> ";

}


if (isset($_POST['africa']) ) {

    $africa=$baseblog->prepare('select country from countries where continent="Africa" ');
    $africaaa=$africa->execute(array());
    var_dump($africaaa);
    echo "  <br> ";

}


if (isset($_POST['europe']) ) {

    $europe=$baseblog->prepare('select country from countries where continent="Europe" ');
    $europeee=$europe->execute(array());
    var_dump($europeee);
    echo "  <br> ";

}



if (isset($_POST['oceania']) ) {

    $oceaniaAustralasia=$baseblog->prepare('select country from countries where continent="Oceania-Australasia" ');
    $oceaniaaaAustralasia=$oceaniaAustralasia->execute(array());
    var_dump($oceaniaaaAustralasia);
    echo "  <br> ";

    $oceaniaPacificIslands=$baseblog->prepare('select country from countries where continent="Oceania-Pacific Islands" ');
    $oceaniaaaPacificIslands=$oceaniaPacificIslands->execute(array());
    var_dump($oceaniaaaPacificIslands);
    echo "  <br> ";

}



if (isset($_POST['americas']) ) {

    $NorthAmerica=$baseblog->prepare('select country from countries where continent="North America" ');
    $NorthAmericaaa=$NorthAmerica->execute(array());
    var_dump($NorthAmericaaa);
    echo "  <br> ";

    $SouthAmerica=$baseblog->prepare('select country from countries where continent="South America" ');
    $SouthAmericaaa=$SouthAmerica->execute(array());
    var_dump($SouthAmericaaa);
    echo "  <br> ";

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
    <link rel="stylesheet" type="text/css" href="css/countries&cities.css">
    <title>Countries&Cities</title>
</head>
<body>
    <header>
    <div style=" background-color: #d9a5b3" >
<p class="logo-header"><a href="accueil.php">know</a></p>
</div>
    </header>


    <main class="main">
        <div  class="container"> 
                    
           <div class="row">
           <div style=" text-align: center " class="col-4 pays">  <form action="#" method="post"> <button type="submit" name="asia" style="border:none ; background-color: #ef9d10; text-decoration: none ; font-family: 'RocknRoll One', sans-serif; font-size: 20px ; color: #1868ae"   >Asia </button>   </form> </div>
           <div class="col-2"></div>
           <div style=" text-align: center " class="col-4 pays">  <form action="#" method="post">  <button type="submit" name="oceania" style="border:none ; background-color: #ef9d10; text-decoration: none ; font-family: 'RocknRoll One', sans-serif; font-size: 20px ; color: #1868ae"   >Oceania (Australia & Pacific Islands) </button>  </form> </div>
           <div class="col-2"></div>
            <div style=" text-align: center " class="col-6 pays"> <form action="#" method="post"> <button type="submit" name="africa" style="border:none ; background-color: #ef9d10; text-decoration: none ; font-family: 'RocknRoll One', sans-serif; font-size: 20px ; color: #1868ae"   >Africa </button> </form> </div>
            <div class="col-2"></div>
            <div style=" text-align: center " class="col-4 pays"> <form action="#" method="post"> <button type="submit" name="americas" style="border:none ; background-color: #ef9d10; text-decoration: none ; font-family: 'RocknRoll One', sans-serif; font-size: 20px ; color: #1868ae"  >Americas (North & South) </button> </form> </div>
            <div class="col-2"></div>
             <div style=" text-align: center " class="col-4 pays"> <form action="#" method="post"> <button type="submit" name="europe" style="border:none ; background-color: #ef9d10; text-decoration: none ; font-family: 'RocknRoll One', sans-serif; font-size: 20px ; color: #1868ae"   >Europe </button> </form> </div>
           </div>
           <hr>
        </div>
          <!-- affichage des pays asia -->
        <div class="divpays">
        <ul >

        <?php  while ($asia1=$asia->fetch()) {?>
        <li  style="text-align: center"> <?php echo $asia1['country'] ?> </li>
        <?php }   ?>

        </ul>
        </div>
           <!-- affichage des pays africa -->
        <div class="divpays">
        <ul >

        <?php  while ($africa1=$africa->fetch()) {?>
        <li  style="text-align: center"> <?php echo $africa1['country'] ?> </li>
        <?php }   ?>

        </ul>
        </div>
           <!-- affichage des pays europe -->
           <div class="divpays">
        <ul >

        <?php  while ($europe1=$europe->fetch()) {?>
        <li  style="text-align: center"> <?php echo $europe1['country'] ?> </li>
        <?php }   ?>

        </ul>
        </div>
         <!-- affichage des pays oceania -->
         <div class="divpays">
        <ul >

        <li>**Australasia**</li>
        <?php  while ($oceaniaAustralasia1=$oceaniaAustralasia->fetch()) {?>
        <li  style="text-align: center"> <?php echo $oceaniaAustralasia1['country'] ?> </li>
        <?php }   ?>

        <li>**PacificIslands**</li>
        <?php  while ($oceaniaPacificIslands1=$oceaniaPacificIslands->fetch()) {?>
        <li  style="text-align: center"> <?php echo $oceaniaPacificIslands1['country'] ?> </li>
        <?php }   ?>

        </ul>
        </div>
          <!-- affichage des pays americas -->
          <div class="divpays">
        <ul >

        <li>**North America**</li>
        <?php  while ($NorthAmerica1=$NorthAmerica->fetch()) {?>
        <li  style="text-align: center"> <?php echo $NorthAmerica1['country'] ?> </li>
        <?php }   ?>

        <li>**South America**</li>
        <?php  while ($SouthAmerica1=$SouthAmerica->fetch()) {?>
        <li  style="text-align: center"> <?php echo $SouthAmerica1['country'] ?> </li>
        <?php }   ?>

        </ul>
        </div>
    </main>


    <footer class="footer">
    <div>
        <p style=" text-align: center ; padding: 15px"><a class="contact-footer" href="">contact</a></p>
    </div>
    </footer>
</body>
</html>