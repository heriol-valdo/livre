<?php 
// recupreation des elements du formulaire


if(isset($_POST['email']) && isset($_POST['mdp'])){

try{
  $mysqlClient = new PDO('mysql:host=localhost;dbname=clinique;charset=utf8', 'heriol', 'heriol', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}catch(Exception $exception){
   die('Erreur : '.$exception->getMessage());

}

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){


    $sqlQuery = 'SELECT id  FROM con WHere email=:email';

    // Préparation
     $selectuser = $mysqlClient->prepare($sqlQuery);

   // Exécution ! La recette est maintenant en base de données
    $selectuser->execute([
     'email' => $_POST['email'],
    ]);

    $user = $selectuser->fetch();
    
     if($user['id'] != ""){
              echo "l'utilisateur existe deja ";
          }elseif ($user['id'] === "") {
           

           
          } {
          
             // $sqlQuery1 = 'INSERT INTO con(email, mdp) VALUES (:email, :mdp)';

             //  // Préparation
             //   $insertContact1 = $mysqlClient->prepare($sqlQuery1);

             // // Exécution ! La recette est maintenant en base de données
             //  $insertContact1->execute([
             //    'email' => $_POST['email'],
             //    'mdp' => $_POST['mdp'],
              
             //   ]);
              echo "l'utilisateur va etre enregistrer deja ";
          }
         
           
      }
  
    

  else{
    
      echo "votre mail n'est pas correct veuillez inserer un autre";
  }
}




?>


