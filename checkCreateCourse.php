<?php
session_start();
require_once 'connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($db_host, $db_user, $db_password, $database)
    or die("Ошибка " . mysqli_error($link));
$formId = $_POST['form_id'];

// Проверка формы Создания курса
 if (($formId) == 3) {
    $Name_Videocorse = $_POST['Name_Videocorse'];
    $Theme = $_POST['Theme'];
    $Course_Duration = $_POST['Course_Duration'];
    $Cost = $_POST['Cost'];
    $Preview = 'preiews/' . time() . $_FILES['Preview']['name'];
    $Video_Link=$_POST['Video_Link'];
    $Difficulties = $_POST['Difficulties'];
    $Description = $_POST['Description'];
    $proverka=true;
    // // Проверка пустоты поля Названия видеокурса
        if (empty($Name_Videocorse)) {
            $proverka=false;
        $_SESSION['No_Name_Videocorse'] = 'Вы не ввели Название видеокурса';
        header('Location: ./Create_Course.php');
    } else {
        $_SESSION['Name_Videocorse'] = $Name_Videocorse;
        header('Location: ./Create_Course.php');
    }
    //Проверка пустоты поля Темы видеокурса
    if (empty($Theme)) {
        $proverka=false;
        $_SESSION['No_Theme'] = 'Вы не ввели Тему видеокурса';
        header('Location: ./Create_Course.php');
    } else {
        $_SESSION['Theme'] = $Theme;
        header('Location: ./Create_Course.php');
    }
    //Проверка пустоты поля Изображение Видеокурса
    if (!move_uploaded_file($_FILES['Preview']['tmp_name'], './' . $Preview)) {
        $proverka=false;
        $_SESSION['Preview'] = 'Ошибка при загрузке файла';
        header('Location: ./Create_Course.php');
    }
    //Проверка пустоты поля Продолжительность курса
    if (empty($Course_Duration)) {
        $proverka=false;
        $_SESSION['No_Course_Duration'] = 'Вы не ввели Продолжительность видеокурса';
        header('Location: ./Create_Course.php');
    } else {
        $_SESSION['Course_Duration'] = $Course_Duration;
        header('Location: ./Create_Course.php');
    }
    //Проверка пустоты поля Ссылки на видеокурс
    if (empty($Video_Link)) {
        $proverka=false;
        $_SESSION['No_Video_Link'] = 'Вы не ввели ссылку на видеокурс';
        header('Location: ./Create_Course.php');
    } else {
        //Проверка E-mail по базе данных 
        $check_user = mysqli_query($link, "SELECT * FROM `videocourses`  WHERE `Video_File`='$Video_Link'");
        if (mysqli_num_rows($check_user) > 0) {
            $proverka=false;
            $_SESSION['No_Video_Link'] = 'Видеокурс с такой ссылкой уже существует';
            header('Location: ./Create_Course.php');
        } else {
            $_SESSION['Video_Link'] = $Video_Link;
            header('Location: ./Create_Course.php');
        }
    }
    //Проверка пустоты поля Сложность курса
    if (empty($Difficulties)) {
        $proverka=false;
        $_SESSION['No_Difficulties'] = 'Вы не ввели Сложность курса';
        header('Location: ./Create_Course.php');
    } else {
        $_SESSION['Difficulties'] = $Difficulties;
        header('Location: ./Create_Course.php');
    }
    //Проверка пустоты поля Описание видеокурса
    if (empty($Description)) {
        $proverka=false;
        $_SESSION['No_Description'] = 'Вы не ввели Описание видеокурса';
        header('Location: ./Create_Course.php');
    } else {
        $_SESSION['Description'] = $Description;
        header('Location: ./Create_Course.php');
    } 
    if (empty($Cost)){
        $Cost='Бесплатно';
    }
    if ($proverka){
       $id=$_SESSION['user']['Id_User'];
       $Video_Link=mb_substr($_POST['Video_Link'], 17);
       //Запись нового видеокурса в базу данных 
        $query = "INSERT INTO `videocourses` (`Id_Author`, `Name_Videocorse`, `Theme`, `Image`,
         `Course_Duration`, `Difficulties`, `Cost`, `Video_File`, `Description`, `Number_Views`, `Blocked`, `Status_Check`, `Date_Publication`)
      VALUES ('$id', '$Name_Videocorse', '$Theme','$Preview', '$Course_Duration', '$Difficulties', '$Cost', '$Video_Link', '$Description', '0', '0', '0', NOW())";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if ($result == true) {
            // Обновляем Роль пользователя
            $query ="UPDATE `users` SET `Role`='Автор' WHERE `Id_User`='$id'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            header('Location: ./Profile.php');
        } else {
            $_SESSION['Create_course'] = 'Произошла ошибка при создании, попробуйте ещё раз';
       header('Location: ./Create_Course.php'); 
    }  
    } else{
}
}