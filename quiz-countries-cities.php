<?php  

session_start();

try {
    $baseblog= new PDO ('mysql:host=localhost;dbname=p-php-quiz;charset=utf8','root','');
} catch (exception $e) {
    echo " la connexion a échoué " ." <br>";
}    


    $select=$baseblog->prepare('SELECT questions.id,questions.question,reponses.reponse,reponses.vraifaux FROM questions INNER JOIN  reponses WHERE questions.id=reponses.idquestion AND questions.categorie="countries and cities"  ');
    $selecttt=$select->execute(array());
       var_dump($selecttt);
       echo "  <br> ";
        



    $number=$baseblog->prepare('select count(id) as num from questions where categorie="countries and cities"  ');
    $numberrr=$number->execute();
    // var_dump($numberrr);
    // echo "  <br> ";
    $num=$number->fetch();
     

    
    
        

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
    <link rel="stylesheet" type="text/css" href="quiz-countries-cities.css">
    <title>Quiz Contries & Cities</title>
</head>
<body>
    
<header>
    <div style=" background-color: #d9a5b3" class="div-header" >

    <?php    if (!isset($_SESSION['id'])) {  ?>
    <div  class="aaaa" >
<a class="aa" href="inscrire.php">S'inscrire</a>
<a style="margin-left: 20px;"  class="aa" href="seconnecter.php">Se connecter</a>
</div>
<?php  }  ?>

<?php    if (isset($_SESSION['id'])) {  ?>
<div style=" margin-top:10px ; margin-left: 20px " class="dropdown"  > <img class="imageuser" src="<?php  echo $_SESSION['avatar'] ?>" alt="image"> <h6 class="nameuser" ><?php  echo $_SESSION['username'] ?></h6> 
<div class="dropdown-content">
<a href="profile-user.php">Profile</a>
  <a href="deconnexion.php">Log Out</a>
  </div>
</div>
<?php  }  ?>

<p class="logo-header"><a href="accueil.php">know</a></p>
</div>
    </header>


    <main class="main">

    <div class="questions">
    <?php
    $question = '';
    $cpt= 0 ;
      while ($select1=$select->fetch()) {?>
        <article>
            <p class="pp"  ><?php  if ($question != $select1['question']) {
                                  echo $select1['question']  ;
                                  echo " ?";
                                  $question = $select1['question']; 
                                } ?> </p>
           
           <button name="choix" type="submit"><?php  echo $select1['reponse'];  ?></button>
        </article>
        <?php
            // echo "<pre>";
            // print_r($select1);
            // echo "  </pre> ";
            // echo "  <br> ";
            if (isset($_POST['choix']) && $select1['vraifaux']== "vrai" ) {
                $cpt=$cpt+1;
            }
            elseif (isset($_POST['choix']) && $select1['vraifaux']== "faux") {
                $cpt=$cpt;
            }
            else {
                echo "no no no";
            }
         } ?>
    </div>

    <div class="score">
        <p>Your Score : <?php echo $cpt ;  ?>  /<?php echo $num['num']  ?> </p>
    </div>

    </main>


    <footer class="footer">
    <div>
        <p style=" text-align: center ; padding: 15px"><a class="contact-footer" href="">contact</a></p>
    </div>
    </footer>

</body>
</html>