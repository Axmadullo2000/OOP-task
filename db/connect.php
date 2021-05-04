<?php
    $dbhost = 'localhost';
    $dbname = 'portfolio';
    $dbusername = 'mysql';
    $dbpassword = 'mysql';
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);