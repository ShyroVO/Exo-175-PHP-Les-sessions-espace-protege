<?php
$error = "error";
$login = trim($_GET['login']);
$password = trim($_GET['password']);

if ($login === "Truc" && $password === "truc"){
    echo "Hi ".$login."!";
} else {
    header('Location: index.php?error='.$error);
    exit();
}