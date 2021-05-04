<?php
    include "db/connect.php";
    $username = $_POST['username'];
    $passi = $_POST['pass'];
    $pass = md5($passi);
    $stmt = $pdo->prepare("SELECT * FROM users WHERE `username`=:username AND `pass`=:pass");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pass", $pass);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO:: FETCH_OBJ)):
        if ($row->username === $username && $row->pass === $pass):
            session_start();
            $_SESSION['username'] = $row->username;
            $_SESSION['status'] = $row->status;
            header("Location: admin/templates/index.php");
        else:
            header("Location: index.php");
        endif;
    endwhile;
?>