<?php
    require_once('Models/message.php');

    date_default_timezone_set('Asia/Tokyo');

    // エラー解決：$_post 小文字になっていた
    $name = $_POST['name'];
    $message = $_POST['message'];
    $date = date("Y/m/d H:i:s");
    // var_dump($name);

    $task = new message();
    $task->create([$name, $message, $date]);

    header('location:index.php');
    exit;
?>