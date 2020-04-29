<?php

//credentias pour la BDD
$dsn = "mysql:host=mysql;dbname=blog";
$user = "root";
$passwd = "root";
$pdo = new PDO($dsn, $user, $passwd);

// Controle dans la bdd si le couple email-mdp est bon, et se logge
function traitementConnexion($email, $password, $pdo)
{
   $stm = $pdo->query("SELECT * from users where users_email = '$email'");
   $utilisateur = $stm->fetch();
   if (password_verify($password, $utilisateur['users_password'])) {
      return true;
   } else {
      return false;
   }
}



function whatIsCurentUser()
{
   if (isset($_SESSION)) {
      echo ($_SESSION['user']);
?>
      <a href="">Déconnexion</a>
<?php

   };
}
