<?php  

try {
    $baseblog= new PDO ('mysql:host=localhost;dbname=blog-recuperation;charset=utf8','root','');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="essaie-js.css">
    <title>Document</title>
    <style>
        .color{
            background-color: #aaa;
        }
    </style>
</head>
<body>
    
    <header>
    
 
    <ul class="ulfirst">


      <li class="lifirst">
        <a class="afirst" href="#">first</a>
        <ul class="ulsecond">
          <li class="lisecond"><a class="asecond" href="#">1111111</a></li>
          <li class="lisecond"><a class="asecond" href="#">2222222</a></li>
          <li class="lisecond"><a class="asecond" href="#">3333333</a></li>
        </ul>
      </li>

      <li class="lifirst">
       <a class="afirst" href="#">second</a>
       <ul class="ulsecond">
         <li class="lisecond"><a class="asecond" href="#">1111111</a></li>
         <li class="lisecond"><a class="asecond" href="#">2222222</a></li>
         <li class="lisecond"><a class="asecond" href="#">3333333</a></li>
       </ul>
     </li>

     <li class="lifirst">
       <a class="afirst" href="#">third</a>
       <ul class="ulsecond">
         <li  class="lisecond"><a class="asecond" href="#">1111111</a></li>
         <li class="lisecond"><a class="asecond" href="#">2222222</a></li>
         <li class="lisecond"><a class="asecond" href="#">3333333</a></li>
       </ul>
     </li>


    </ul>

      
    </header>
    <main style="width: 80%; margin-left: auto; margin-right: auto;">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>

          <a href="">cliquer ici</a>
          <p>hello</p>
    </main>
    <footer></footer>

<script>


// let nom = 'maryem';
// let prenom = 'baiz';

// console.log('je suis' +' ' +nom +' ' + prenom);
// console.log(typeof nom);
// let tab =["un", 2 , [3,4]];

// console.log(tab);
// console.log(tab.length);
// console.log(tab[0]);
// console.log(tab[2]);
// console.log(tab[2][1]);


// let personne = {
//     nom1 : "baiz",
//     prenom1 : "maryem"
// }
// console.log(personne);
// console.log(personne.nom1);
// console.log(personne["prenom1"]);





//     let hello = 'hello';
// console.log(hello);

// // let age = prompt ('quel est votre age');

// // if (age < 18 ){
// //     alert('vous etes un mineur');
// // }else if (age > 40 ){
// //    alert('vous etes un sinior');
// // }
// // else{
// //    alert('vous etes un majeur');
// // }

// /////////////////////

// // let number = prompt('veuillez choisir une salade , tajine ou soupe ').toLowerCase();



// // switch (number) {
// //     case 'salade' : { alert('votre choix est une salade'); break;}  
// //     case 'tajine' : { alert('votre choix est un tajine'); break;}  
// //     case 'soupe' : { alert('votre choix est une soupe'); break;}  
// //     default  : { alert('veuillez choisir un nombre '); break; } 
        
// // }

// //challenge : questionnaire

//  let somme = prompt(' quelle est la somme du 2 et 3 ? \n 1- 5 \n 2- 6');

//  if (somme == 1) {
//      alert('votre réponse est vraie');
//  }else if (somme == 2){
//      alert('votre réponse est fausse');
//  }else {
//      alert('veuillez choisir une réponse');
//  }

//  let soustraction = prompt(' quelle est la soustraction du 6 du 3 ? \n 1- 4 \n 2- 3');

//  switch (soustraction) {
//      case '1':{ alert('votre réponse est fausse') ; break;}
//      case '2':{ alert('votre réponse est vraie') ; break;}
//      default: {  alert('veuillez choisir une réponse') ; break;}
//  }

//  if (somme == 1 && soustraction == 2) {
//      alert('votre résultat est 2/2 ');
//  } else if (somme == 2 && soustraction == 1) {
//     alert('votre résultat est 0/2 ');
//  } else if (somme == 1 && soustraction == 1) {
//     alert('votre résultat est 1/2 ');
//  }else if (somme == 2 && soustraction == 2) {
//     alert('votre résultat est 1/2 ');
//  }else{
//      alert(" vous n'avez répondre à ancune question ");
//  }


 // appliquer un évenement sur une seule ligne du tableu
//    let first= document.querySelector('tbody tr');

//    first.addEventListener('click' , function () {
//          first.classList.add('color');
//         // first.style.backgroundColor="red";
//    });


 // appliquer un évenement sur toutes les lignes du tableau

  let tabtr= document.querySelectorAll('tbody tr');

  for (let tr of tabtr){
      tr.addEventListener('click' , function () {
          this.classList.toggle('color');
      });
  }
   
</script>
</body>
</html>