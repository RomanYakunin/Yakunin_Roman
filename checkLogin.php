<?php
session_start();
require_once 'connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($db_host, $db_user, $db_password, $database)
    or die("Ошибка " . mysqli_error($link));
$formId = $_POST['form_id'];

//Проверка формы Авторизации
if (($formId) == 1) {
    $email = $_POST['login'];
    $password = $_POST['pass'];
    $proverka=true;
    if (($email == 'admiv@bk.ru') && ($password == 'Roman8917')) {
        header('Location: ./AdminPage.php');
    } else {
        // Проверка пустоты поля E-mail
        if (empty($email)) {
            $proverka=false;
            $_SESSION['No_Email'] = 'Вы не ввели E-mail';
            header('Location: ./SignIn.php');
        } else {
            $_SESSION['Login'] = $email;
            header('Location: ./SignIn.php');
        }
        //Проверка пустоты поля Пароль
        if (empty($password)) {
            $proverka=false;
            $_SESSION['No_password'] = 'Вы не ввели пароль';
            header('Location: ./SignIn.php');
        } 
        if ($proverka){
        $password = md5($_POST['pass']);
        //Проверка данных на нахождение в базе данных
        $check_user = mysqli_query($link, "SELECT * FROM `users` 
         WHERE `E-mail`='$email' AND `Password`='$password' ");
        if (mysqli_num_rows($check_user) > 0) {
            $user= mysqli_fetch_assoc($check_user);
            $_SESSION['user'] = [
                "Id_User" => $user['Id_User'],
                "Last_Name" => $user['Last_Name'],
                "First_Name" => $user['First_Name'],
                "Role" => $user['Role'],
                "Image" => $user['Image'],
                "E-mail" => $user['E-mail'],
                "Password" => $user['Password'],
                "Contact_Number" => $user['Contact_Number']
            ];
            header('Location: ./Profile.php');
            }else{
            $_SESSION['Login'] = $email;
            $_SESSION['No_Login'] = 'Не верный логин или пароль';
            header('Location: ./SignIn.php');
            }
        }         
    }
}
