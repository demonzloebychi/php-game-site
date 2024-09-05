<?php 

$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($login) < 2) {
    echo 'Login Error';
    exit;
}
if(strlen($username) < 2) {
    echo 'username Error';
    exit;
}
if(strlen($email) < 2 && !str_contains($email, '@')) {
    echo 'email Error';
    exit;
}
if(strlen($password) < 2) {
    echo 'password Error';
    exit;
}


//password

$salt = 'KFMPEFDokck(#89JCK';
$password = md5($salt . $password);


//DB 

require 'db.php';

//insert


$sql = 'INSERT INTO users(login, username, email, password) VALUES(?, ?, ?, ?)';

$query = $pdo->prepare($sql);

$query->execute([$login, $username, $email, $password]);



header('Location: /');
