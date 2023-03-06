<?php

$pdo = getDb();

//On récupère l'utilisateur avec l'email qu'on récupère dans $_POST
$email = $_POST['email'] ?? null;
$sql = "select * from users where email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

//ensuite on vérifie le mot de passe envoyé avec celui crypté en DB
$passwordOk = password_verify($_POST['password'], $result[0]['password']);

if(!$passwordOk) {
    $_SESSION['message'] = 'Email ou mot de passe non valide';
    header('Location: /connexion');
}else {
    $_SESSION['message'] = 'Connexion réussie !';
    $_SESSION['user'] = $result[0];
    header('Location: /');
}

/*
echo '<pre>';
print_r(empty($result));die();
echo '</pre>';
*/
