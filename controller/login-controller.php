<?php
require_once('../service/LoginService.php');
require_once('../model/User.php');
$loginId = $_POST['loginId'];
$password = $_POST['pass'];

$loginService = new LoginService();
$result = $loginService->getUser($loginId, $password);

if(!empty($result)) {
    // $user = new User(
    //     $result['id'], 
    //     $result['login_id'], 
    //     $result['password'], 
    //     $result['name'], 
    //     $result['role']
    // );
    session_start();
    $_SESSION['user'] = $result;
    header('Location: ../menu.php');
} else {
    header('Location: ../index.php');
}