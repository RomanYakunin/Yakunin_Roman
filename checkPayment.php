<?php
session_start();
require_once 'connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($db_host, $db_user, $db_password, $database)
    or die("Ошибка " . mysqli_error($link));
$formId = $_POST['form_id'];
//Проверка формы Регистрации
  if (($formId) == 4) {
    $card = $_POST['Card'];
    $user = $_POST['id_user'];
    $course = $_POST['id_course'];
    $cost=$_POST['Cost'];
    $proverka=true;
        //Проверка пустоты поля Фамилии
        if (empty($card)) {
            $proverka=false;
        $_SESSION['No_Card'] = 'Вы не ввели номер карты';
        header('Location: ./Payment.php');
    } else {
        $_SESSION['Card'] = $card;
        header('Location: ./Payment.php');
    }
    if ($proverka){
       //Запись оплаты в базу данных 
        $query = "INSERT INTO `payment` (`Id_Videocourse`, `Id_User`, `Number_Card`, `Cost`, `Date_Payment`)
         VALUES ('$course', '$user','$card', '$cost', NOW())";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        if ($result == true) {
            header("Location: ./course-details.php?course=$course");
        } else {
            $_SESSION['payment'] = 'Произошла ошибка при оплате, попробуйте ещё раз';
       header('Location: ./Payment.php'); 
    }}}