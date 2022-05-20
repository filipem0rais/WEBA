<?php
declare(strict_types=1);

function redirect_home()
{
    header('Location: index.php');
}

// Check que le POST ne soit pas vide
if (empty($_POST)) {
    redirect_home();

}

$form = $_POST;
//var_dump($form);

// Check que les variables existent

if (!isset($form['prenom'])) {
    redirect_home();
}
if (!isset($form['nom'])) {
    redirect_home();
}
if (!isset($form['email'])) {
    redirect_home();
}
if (!isset($form['radio'])) {
    redirect_home();
}
if (!isset($form['list'])) {
    redirect_home();
}
if (!isset($form['message'])) {
    redirect_home();
}

// Nettoyage des variables

foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
}
/*
$form['prenom'] = htmlspecialchars($form['prenom']);
$form['nom'] = htmlspecialchars($form['nom']);
$form['email'] = htmlspecialchars($form['email']);
$form['radio'] = htmlspecialchars($form['radio']);
$form['list'] = htmlspecialchars($form['list']);
*/
// Check qu'il n'y ait pas de valeurs vides

foreach ($form as $key => $value) {
    if (empty($value)) {
        redirect_home();
    }
}

// Check valide email
if (!filter_var($form['email'], FILTER_VALIDATE_EMAIL)) {
    redirect_home();
}

// Créer corps du message
$msg = $form['prenom'] . " " . $form['nom'] . '<br>' . $form['email'] . '<br> Contact pour : ' . $form['radio'] . '<br> Nombre de cours suivis :' . $form['list'] . '<br><br>' . $form['message'];
$msg = wordwrap($msg, 70);


$headers = "From: thewarbook996@gmail.com \r\n".
    "Reply-To: thewarbook996@gmail.com\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo "<h1>Contact</h1>";
// Envoyer le mail
if (mail("filipe.dias@eduvaud.ch", "Test", $msg, $headers)) {
    /*displayAlert("Votre mail a bien été envoyé.","success");*/
    header('Location: http://localhost/Exo9/?status=success');
} else {
    /*displayAlert("Une erreur est survenue lors de l'envoi du mail.","danger");*/
    header('Location: http://localhost/Exo9/?status=failsend');
}

?>
