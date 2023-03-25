<?php 
// connection a une base de donne

try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
?>
    <p><?php echo $recipe['author']; ?></p>
<?php
}
?>


// selectionner un element precis
<?php
try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute([
'author' => 'mathieu.nebra@exemple.com',
'is_enabled' => true,
]);
$recipes = $recipesStatement->fetchAll();

?>








// inserer un element en base de sonnee
<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ecriture de la requête
$sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

// Préparation
$insertRecipe = $mysqlClient->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$insertRecipe->execute([
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : Des flageolets ! Etape 2 : Euh ...',
    'author' => 'contributeur@exemple.com',
    'is_enabled' => 1, // 1 = true, 0 = false
]);
?>


// modifier une ligne

<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ecriture de la requête
$sqlQuery = 'UPDATE recipes SET title = :title, recipe = :recipe WHERE recipe_id = :id';

// Préparation
$UpdateRecipe = $mysqlClient->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$UpdateRecipe->execute([
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : Des flageolets ! Etape 2 : Euh ...',
   , // 1 = true, 0 = false
]);
?>

// supression d'un element et gestion d'erreur

<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ecriture de la requête
$sqlQuery = 'DELETE FROM recipes WHERE recipe_id = :id';

// Préparation
$insertRecipe = $mysqlClient->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$insertRecipe->execute([
     'id' => $id, // 1 = true, 0 = false
])or die(print_r($db->errorInfo()));
?>


// modifier une ligne

<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ecriture de la requête
$sqlQuery = 'UPDATE recipes SET title = :title, recipe = :recipe WHERE recipe_id = :id';

// Préparation
$UpdateRecipe = $mysqlClient->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$UpdateRecipe->execute([
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : Des flageolets ! Etape 2 : Euh ...',
   , // 1 = true, 0 = false
]);
?>


//implementation d'un systeme de connexion
// Validation du formulaire
<?php if (isset($_POST['email']) &&  isset($_POST['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
            $loggedUser = [
                'email' => $user['email'],
            ];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['email'],
                $_POST['password']
            );
        }
    }
}
?>

<!--
   Si utilisateur/trice est non identifié(e), on affiche le formulaire
-->
<?php if(!isset($loggedUser)): ?>
<form action="home.php" method="post">
    <!-- si message d'erreur on l'affiche -->
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
        <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<!-- 
    Si utilisateur/trice bien connectée on affiche un message de succès
-->
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $loggedUser['email']; ?> et bienvenue sur le site !
    </div>
<?php endif; ?>

//creation d'une session

avant toute utilisation il faut l'inserer a la premiere ligne avant toute implementation du code html
<?php session_start(); ?>

ensuite si on veut creer une session on procede comme celui ci

$_SESSION['nom'] = $nameUser['name'];

si on veut creer un boution de deconnection a la session

<?php session_destroy(); ?>

//gestion des cookies
 creation des cookies
 <?php
// retenir l'email de la personne connectée pendant 1 an
setcookie(
    'LOGGED_USER',
    'utilisateur@exemple.com',
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);
?>

affichage d'un cookie
Bonjour <?php echo $_COOKIE['LOGGED_USER']; ?> !



// fonction qui permet d'envoyer les mail
<?php
   $dest="contact@chiny.me";
   $objet="Rendez-vous";
   $message="
      <font face='arial'>
      Bonjourn
      Prière de se retrouver sur Skype à <b>18h</b> aujourd'hui.n
      Merci et bonne journée.
      </font>
   ";
   $entetes="From: zeufackheriol9@gmail.com";
   $entetes.="Cc: chiny@example.comn";
   $entetes.="Content-Type: text/html; charset=iso-8859-1";
   
   if(mail($dest,$objet,$message,$entetes))
      echo "Mail envoyé avec succès.";
   else
      echo "Un problème est survenu.";
   exit;
?>



// autre methode de validation et verification de l'user 


$requette="select idincrenent From user where email=email entrer par l'utilisateur AND mdp=mot de passe entrer par l'utilisateur";
$reponse=mysqli_query($PDOdeconnection,$requette);
$rep=mysqli_fetch_array($reponse);

if($rep['idincrement']!=""){
    //on creer la session
    $_SESSION['user']=$rep['idincrement']
}


$stmt = $pdo->prepare("SELECT * FROM users WHERE id=:id");
     $stmt->execute(['id' => $id]); 
     $user = $stmt->fetch();