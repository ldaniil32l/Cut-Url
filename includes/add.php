<?php

include_once "config.php";
include_once "functions.php";

if (isset($_POST['link']) && !empty($_POST['link']) && isset($_POST['user_id']) && !empty($_POST['user_id']) && $_POST['user_id'] == $_SESSION['user']['id']) {
    if (add_link($_POST['user_id'], $_POST['link'])) {
        $_SESSION['success'] = "Ссылка успешно добавлена!";
    } else {
        $_SESSION['error'] = "Во время добавления ссылки что-то пошло не так!";
    }
}

header("Location: ../profile.php");
die;