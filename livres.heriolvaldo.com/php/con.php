<?php  



 if(isset($_POST['email']) &&  isset($_POST['mdp']) ){

    session_start();


         try{
  $mysqlClient = new PDO('mysql:host=localhost;dbname=clinique;charset=utf8', 'heriol', 'heriol', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}catch(Exception $exception){
   die('Erreur : '.$exception->getMessage());

}

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $sqlQuery = 'SELECT id  FROM con WHere email=:email AND mdp=:mdp';

    // Préparation
     $selectuser = $mysqlClient->prepare($sqlQuery);

   // Exécution ! La recette est maintenant en base de données
    $selectuser->execute([
    'email' => $_POST['email'],
    'mdp' => $_POST['mdp'],
    ]);

    $user = $selectuser->fetch();
      
    if($user['id']!=""){
       $_SESSION['emailMessage']=$_POST['email'];
    }else{
        echo "l'utilisateur n'existe pas";
    }
    

    
}
  else{
    
      echo "votre mail n'est pas correct veuillez inserer un autre";
  }


}


?>