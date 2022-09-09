<?php
session_start();
require_once 'connection.php'; // подключаем скрипт
if (!$_SESSION['user']){
    header('Location: ./SignIn.php');
  } else{
// подключаемся к серверу
$link = mysqli_connect($db_host, $db_user, $db_password, $database)
    or die("Ошибка " . mysqli_error($link));

    $review = $_POST['comment'];
    $user=$_SESSION['user']['Id_User'];
    $course=$_POST['id_course'];
    $proverka=true;
        // Проверка пустоты поля Отзыва
        if (empty($review)) {
            $proverka=false;
            $_SESSION['No_Review'] = 'Вы не написали отзыв';
            header("Location: ./course-details.php?course=$course");
        } else {
            $_SESSION['Review'] = $review;
            header("Location: ./course-details.php?course=$course");
        }
        if ($proverka){
        //Проверка данных на нахождение в базе данных
        $query= "INSERT INTO `reviews` (`Id_Videocourse`, `Id_User`, `Text`, `Date`)
         VALUES ('$course', '$user', '$review', NOW())";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if ($result == true) {
            header("Location: ./course-details.php?course=$course");
        } else {
            $_SESSION['reviews'] = 'Произошла ошибка при написании отзыва, попробуйте ещё раз';
       header("Location: ./course-details.php?course=$course"); 
        }} }        
?>