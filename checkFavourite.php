<?php
session_start();
require_once 'connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($db_host, $db_user, $db_password, $database)
    or die("Ошибка " . mysqli_error($link));
    if ($_REQUEST['favourite']){
    $user = $_SESSION['user']['Id_User'];
    $course = $_REQUEST['favourite'];
    $query_favourite = "SELECT * FROM `favourites`  WHERE `Id_Videocourse`='$course' AND `Id_User`='$user'";
              $result_favourite = mysqli_query($link, $query_favourite) or die("Ошибка " . mysqli_error($link));
              $row_favourite = mysqli_fetch_array($result_favourite);
              if ($row_favourite>0){
            //Удаление из избранного в базе данных 
            $query = "DELETE FROM `favourites` WHERE `Id_Videocourse`='$course'";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            if ($result == true) {
                $_SESSION['favourite']='./assets/img/icon-star-no_activ.png';
                header("Location: ./courses.php");
            } else {
                $_SESSION['favourite'] = 'Произошла ошибка при удалении из избранного, попробуйте ещё раз';
           header('Location: ./courses.php');       
        }} else{
       //Запись избранного в базу данных 
        $query = "INSERT INTO `favourites` (`Id_Videocourse`, `Id_User`)
         VALUES ('$course', '$user')";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        if ($result == true) {
            $_SESSION['favourite']='./assets/img/icon-star-activ.png';
            header("Location: ./courses.php");
        } else {
            $_SESSION['favourite'] = 'Произошла ошибка при добавлении в избранное, попробуйте ещё раз';
       header('Location: ./courses.php'); 
    }}}