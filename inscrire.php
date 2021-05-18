<?php  

try {
    $baseblog= new PDO ('mysql:host=localhost;dbname=blog-blog;charset=utf8','root','');
} catch (exception $e) {
    echo " la connexion a échoué " ." <br>";
}   

    
if(isset($_POST['inscrire'])){
            
    
            $username=strip_tags($_POST['username']);
            $username=htmlspecialchars($_POST['username']);
          

            $email=strip_tags($_POST['email']);
            $email=htmlspecialchars($_POST['email']);
            

            $password=strip_tags($_POST['password']);
            $password=htmlspecialchars($_POST['password']);
            
            
            $datedenaissance=strip_tags($_POST['naissance']);
            $datedenaissance=htmlspecialchars($_POST['naissance']);


          
        

          echo "<pre>";
         print_r($_FILES['file']);
         echo "  </pre> ";
         echo "  <br> ";

        echo "<pre>";
          print_r($username);
          echo "  </pre> ";
          echo "  <br> ";

          echo "<pre>";
          print_r($email);
          echo "  </pre> ";
          echo "  <br> ";

          echo "<pre>";
          print_r($password);
          echo "  </pre> ";
          echo "  <br> ";

          echo "<pre>";
          print_r($datedenaissance);
          echo "  </pre> ";
          echo "  <br> ";
       

        if ( isset($_FILES['file']) and $_FILES['file']['error']== 0 ) {
            
              if ($_FILES['file']['size'] < 2000000 ) {
                  
                    $details= pathinfo($_FILES['file']['name']);
                    $extension=$details['extension'];
                    $liste_extensions_acceptables=array('png',"jpg");
                    $resultat=in_array($extension,$liste_extensions_acceptables);

                     
          echo "<pre>";
          print_r($details);
          echo "  </pre> ";
          echo "  <br> ";
        var_dump($resultat);
        echo "  <br> ";

        echo "<pre>";
        print_r($resultat);
        echo "  </pre> ";
        echo "  <br> ";

                    if ($resultat == true) {
                        move_uploaded_file($_FILES['file']['tmp_name'] , "imageuser/" .$details['basename']);
                    }
                            $chemain= "imageuser/" .$details['basename'];

                            echo "<pre>";
                            print_r($chemain);
                            echo "  </pre> ";
                            echo "  <br> ";
                            // $_SESSION['immageutilisateur'] = $chemain;
                $inserer=$baseblog->prepare(' insert into user(username,email,password,avatar,date-de-naissance) values(?,?,?,?,?) ');
                $inserer1=$inserer->execute(array($_POST['username'],$_POST['email'],$_POST['password'],$chemain,$_POST['naissance']));
                var_dump($inserer1);
                echo "  <br> ";
              }
              //header('Location:seconnecter.php');
        }
        else {
            $avatar="photos/image-avatar.png";
            $inserer=$baseblog->prepare(' insert into user(username,email,password,avatar,date-de-naissance,genre) values(?,?,?,?,?,?) ');
                $inserer1=$inserer->execute(array($_POST['username'],$_POST['email'],$_POST['password'],$avatar,$_POST['date-de-naissance'],2));
                header('Location:seconnecter.php');
                var_dump($inserer1);
                echo "  <br> ";
        }
        // header('Location:seconnecter.php');
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
    <link rel="stylesheet" type="text/css" href="css/inscrire.css">
    <title>S'inscrire</title>
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


  <div class="inscrire">
  <form action="#"  method="post"  enctype="multipart/form-data">
      <input class="input" type="text" name="username" placeholder="User Name">
      <input class="input" type="email" name="email" placeholder="Email">
      <input class="input" type="password" name="password" placeholder="Password">
      <input class="input" type="date" name="naissance" placeholder="Birth">

      <div style=" margin-bottom: 20px; font-family: 'RocknRoll One', sans-serif; text-align:center" class=" input-group">
      <div class="custom-file">
      <input type="file" name="file" class=" custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
      <label class="custom-file-label" for="inputGroupFile01">Seléctionner une immage</label>
      </div>
      </div>

      <input  class="inputsubmit" type="submit" name="inscrire" value="Sign Up">
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