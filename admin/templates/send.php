<?php
    include "../../db/connect.php";
    if ( 0 < $_FILES['files']['error'] ) {
        echo 'Error: ' . $_FILES['files']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['files']['tmp_name'], '../dist/img/'. $_FILES['files']['name']);
    }
/*      $sql = $pdo->prepare("INSERT INTO posts (`title`, `content`, `file`, `tags`) VALUES (?, ?, ?, ?)");
     $sql->execute(array($title, $content, $file, $context)); */
    (strlen($_POST['title']) >= 5) ?
        $title = $_POST['title'] : null;
    (strlen($_POST['content']) >= 50) ?
        $content = $_POST['content'] : null;
        $type = $_FILES['files']['type'];
    if ($type == 'image/png' || $type == 'image/jpeg' || $type == 'image/jpg'):
        $file = $_FILES['files']['name'];
    else:
       echo "<span style='color: red;'>Загрузите изображения!!!</span>";
    endif;
    (strlen($_POST['context']) > 0) ?
        $context = $_POST['context'] : null;
    $arrData = [
            'title' => $title,
            'content' => $content,
            'files' => $file,
            'tags' => $context
    ];
    $sql = "INSERT INTO `posts` (`title`, `content`, `file`, `tags`) VALUES (:title, :content, :files, :tags)";
    $stmt = $pdo->prepare($sql);
    //execute
    $stmt->execute($arrData);