<?php   
 session_start();

 try {
    $baseblog= new PDO ('mysql:host=localhost;dbname=p-php-quiz;charset=utf8','root','');
} catch (exception $e) {
    echo " la connexion a échoué " ." <br>";
} 

  

    session_destroy();
    header('Location:accueil.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>