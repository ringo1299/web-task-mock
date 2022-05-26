<?php
require_once('../model/DBAccess.php');
class LoginService
{
    function getUser($loginId, $password)
    {
        try {
            $pdo = new DBAccess();

            $sql = 'select * from users where login_id = :loginId 
                and password = :password';
            $stmt = $pdo->getPdo()->prepare($sql);
            $stmt->execute([
                'loginId' => $loginId, 
                'password' => $password
            ]);
            $user = $stmt->fetch();
            return $user;
        } catch(Exception $e) {
            echo 'エラー';
        }
    }
}