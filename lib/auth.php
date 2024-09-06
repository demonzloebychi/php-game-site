<?php 

$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($login) < 2) {
    echo 'Login Error';
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


//auth user

$sql = 'SELECT id FROM users WHERE login= ? AND password = ?';

$query = $pdo->prepare($sql);

$query->execute([$login, $password]);


if($query->rowCount() == 0)
    echo 'Пользователя нет!';
else {
    setcookie('login', $login, time() + 3600 * 24 * 30, '/');
    header('Location: /user.php');
}
