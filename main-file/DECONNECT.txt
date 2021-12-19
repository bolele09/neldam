<?php
session_start();
 
// Ici la connexion à la BDD dans $bdd
 
if (!empty($_POST)) {
    $errors = [];
    $user = false;
 
    if (empty($_POST['login']) || empty($_POST['password'])) {
        $errors['required'] = 'Vous devez remplir tout les champs';
    }
 
    if (empty($errors)) {
        $req = $bdd->prepare('SELECT * FROM visitor WHERE login = :login');
 
        $req->bindValue('login', $_POST['login'], PDO::PARAM_STR);
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
 
        if ($data) {
            if ($data['password'] === sha1($_POST['password'])) {
                $user = $data;
            } else {
                $errors['login'] = 'Identifiants incorrect';
            }
        } else {
            $errors['login'] = 'Identifiants incorrect';
        }
    }
 
    if ($user) {
        $_SESSION['auth'] = $user;
        header('location: index.php?page=board');
    } else {
        $_SESSION['errors'] = $errors;
        header('location: index.php?page=error');
    }
    exit;
}