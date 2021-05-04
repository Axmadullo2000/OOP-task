<?php
    include "../../db/connect.php";
    if (strlen($_POST['context_post']) > 0):
        $context_post = $_POST['context_post'];
        echo "Всё прошло успешно!";
    else:
        echo $mess = "*Введите значения!!!";
    endif;
    $arrData = [
        'tags'  => $context_post
    ];
    $sql = "INSERT INTO `tags` (`tags`) VALUES (:tags)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute($arrData);
?>