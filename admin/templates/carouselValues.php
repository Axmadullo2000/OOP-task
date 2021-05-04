<?php
    include "../../db/connect.php";
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['uploadFile']['name'];
    $type = $_FILES['uploadFile']['type'];
    $file_ext = explode(".", $_FILES['uploadFile']['name']);
    $file_ext = $file_ext[count($file_ext) - 1];
/*     $file_ext = strtolower(end(explode('.',$_FILES['uploadFile']['name']))); */
    $destinationFileName = date("Y-m-d-h-i-s").".".$file_ext;
    if ($type == 'image/jpeg' || $type == 'image/png' || $type == 'images/jpg'):
        move_uploaded_file($_FILES['uploadFile']['tmp_name'], "../dist/img/".$destinationFileName);
    else:
        echo "Загрузите изображение!!!";
    endif;
    $arrData = [
        'title' => $title,
        'content' => $content,
        'images' => $destinationFileName
    ];
    $stmt = $pdo->prepare("INSERT INTO `carousel` (`title`, `content`, `image`) VALUES (:title, :content, :images)");
    $stmt->execute($arrData);