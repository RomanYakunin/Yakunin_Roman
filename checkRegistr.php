<?php
session_start();
require_once 'connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($db_host, $db_user, $db_password, $database)
    or die("Ошибка " . mysqli_error($link));
$formId = $_POST['form_id'];
//Проверка формы Регистрации
if (($formId) == 2) {
    $last_name = $_POST['Last_Name'];
    $first_name = $_POST['First_Name'];
    $email = $_POST['login'];
    $password = $_POST['pass'];
    $avatar = 'uploads/' . time() . $_FILES['avatar']['name'];
    $password_confirm = $_POST['pass_confirm'];
    $Contact_number = $_POST['Number'];
    $Dob_email = $_POST['Recovery_Email'];
    $proverka = true;
    if (!(empty($first_name) && empty($last_name) && empty($password) && empty($email) &&
        empty($password_confirm) && empty($avatar) && empty($Contact_number) && empty($Dob_email))) {
        //Проверка пустоты поля Фамилии
        if (empty($last_name)) {
            $proverka = false;
            $_SESSION['No_Last_Name'] = 'Вы не ввели Фамилию';
            header('Location: ./SignUp.php');
        } else {
            $_SESSION['Last_Name'] = $last_name;
            header('Location: ./SignUp.php');
        }
        //Проверка пустоты поля Имя
        if (empty($first_name)) {
            $proverka = false;
            $_SESSION['No_First_Name'] = 'Вы не ввели Имя';
            header('Location: ./SignUp.php');
        } else {
            $_SESSION['First_Name'] = $first_name;
            header('Location: ./SignUp.php');
        }
        //Проверка пустоты поля E-mail
        if (empty($email)) {
            $proverka = false;
            $_SESSION['No_Email'] = 'Вы не ввели email';
            header('Location: ./SignUp.php');
        } else {
            //Проверка E-mail по базе данных 
            $check_user = mysqli_query($link, "SELECT * FROM `users`  WHERE `E-mail`='$email'");
            if (mysqli_num_rows($check_user) > 0) {
                $proverka = false;
                $_SESSION['No_Email'] = 'Пользователь с таким E-mail уже существует';
                header('Location: ./SignUp.php');
            } else {
                $_SESSION['Email'] = $email;
                header('Location: ./SignUp.php');
            }
        }
        //Проверка пустоты поля Пароль
        if (empty($password)) {
            $proverka = false;
            $_SESSION['No_password'] = 'Вы не ввели пароль';
            header('Location: ./SignUp.php');
        } else {
            $_SESSION['password'] = $password;
            header('Location: ./SignUp.php');
        }
        //Проверка пустоты поля Подтверждение пароля
        if (empty($password_confirm)) {
            $proverka = false;
            $_SESSION['No_password_confirm'] = 'Подтвердите пароль';
            header('Location: ./SignUp.php');
        } else {
            //Проверка подтверждения пароля
            if (!($password === $password_confirm)) {
                $proverka = false;
                $_SESSION['No_password_confirm'] = 'Пароли не совпадают';
                header('Location: ./SignUp.php');
            }
        }
        //Проверка пустоты поля Изображение профиля
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], './' . $avatar)) {
            $proverka = false;
            $_SESSION['foto'] = 'Ошибка при загрузке файла';
            header('Location: ./SignUp.php');
        }
        //Проверка пустоты поля Контактный номер
        if (empty($Contact_number)) {
            $proverka = false;
            $_SESSION['No_number'] = 'Вы не ввели Контактный номер';
            header('Location: ./SignUp.php');
        } else {
            $_SESSION['number'] = $Contact_number;
            header('Location: ./SignUp.php');
        }
        //Проверка пустоты поля E-mail для восстановления
        if (empty($Dob_email)) {
            $proverka = false;
            $_SESSION['No_Recovery_Email'] = 'Вы не ввели Дополнительный E-mail';
            header('Location: ./SignUp.php');
        } else {
            $_SESSION['Recovery_Email'] = $Dob_email;
            header('Location: ./SignUp.php');
        }
    }
    if ($proverka) {
        $password = md5($_POST['pass']);
        //Запись нового пользователя в базу данных 
        $query = "INSERT INTO `users`(`Last_Name`, `First_Name`,`Role`, 
        `Image`,`E-mail`,`Password`,`Contact_Number`,`Recovery_Email`) 
      VALUES ('$last_name', '$first_name', 'Зритель','$avatar', '$email',
       '$password', '$Contact_number', '$Dob_email')";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        if ($result == true) {
            header('Location: ./Profile.php');
        } else {
            $_SESSION['registrate'] = 'Произошла ошибка
             при регистрации, попробуйте ещё раз';
            header('Location: ./SignUp.php');
        }
    }
}
