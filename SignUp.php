<?php
session_start();
if ($_SESSION['user']) {
  header('Location: ./Profile.php');
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Регистрация | KURSOURCE-Видеохостинг курсов</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- <link href="assets/css/style1.css" rel="stylesheet" /> -->
  <link href="assets/css/login.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">KURSOURCE</a></h1>
      <!-- logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a href="about.php">О нас</a></li>
          <li><a href="courses.php">Курсы</a></li>
          <li><a href="trainers.php">Авторы</a></li>
          <li><a href="events.php">События</a></li>
          <?php
          if ($_SESSION['user']) {
            echo '<li><a class="active"  href="./Profile.php">Личный кабинет</a></li>';
            echo '<li><a href="./Logout.php">Выход</a></li>  ';
          }
          ?>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <?php
      if (!$_SESSION['user']) {
        echo '<a href="SignIn.php" class="get-started-btn">Войти</a>';
      }
      ?>
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Регистрация</h2>
        <p>Введите свои данные для регистрации</p>
      </div>
    </div>
    <!-- End Breadcrumbs -->
    <br />

    <div align='center'>

      <form action="checkRegistr.php" method="POST" enctype="multipart/form-data">
        <?php
        if ($_SESSION['registrate']) {
          echo '<p class="msg">' . $_SESSION['registrate'] . '</p>';
        }
        unset($_SESSION['registrate']);
        ?>
        <label>Фамилия</label>
        <?php
        if ($_SESSION['No_Last_Name']) {
          echo '<p class="msg">' . $_SESSION['No_Last_Name'] . '</p>';
          echo '<input type="text" placeholder="Введите Фамилию" name="Last_Name">';
        } else if ($_SESSION['Last_Name']) {
          echo '<input type="text" placeholder="Введите Фамилию" name="Last_Name" value="' . $_SESSION['Last_Name'] . '">';
        } else {
          echo '<input type="text" placeholder="Введите Фамилию" name="Last_Name">';
        }
        unset($_SESSION['No_Last_Name']);
        unset($_SESSION['Last_Name']);
        ?>
        <label>Имя</label>
        <?php
        if ($_SESSION['No_First_Name']) {
          echo '<p class="msg">' . $_SESSION['No_First_Name'] . '</p>';
          echo '<input type="text" placeholder="Введите Имя" name="First_Name">';
        } else if ($_SESSION['First_Name']) {
          echo '<input type="text" placeholder="Введите Имя" name="First_Name" value="' . $_SESSION['First_Name'] . '">';
        } else {
          echo '<input type="text" placeholder="Введите Имя" name="First_Name">';
        }
        unset($_SESSION['No_First_Name']);
        unset($_SESSION['First_Name']);
        ?>
        <label>E-mail</label>
        <?php
        if ($_SESSION['No_Email']) {
          echo '<p class="msg">' . $_SESSION['No_Email'] . '</p>';
          echo '<input type="email" placeholder="Введите E-mail" name="login">';
        } else if ($_SESSION['Email']) {
          echo '<input type="email" placeholder="Введите E-mail" name="login" value="' . $_SESSION['Email'] . '">';
        } else {
          echo '<input type="email" placeholder="Введите E-mail" name="login">';
        }
        unset($_SESSION['No_Email']);
        unset($_SESSION['Email']);
        ?>
        <label>Пароль</label>
        <?php
        if ($_SESSION['No_password']) {
          echo '<p class="msg">' . $_SESSION['No_password'] . '</p>';
          echo '<input type="password" placeholder="Введите Пароль" name="pass">';
        } else if ($_SESSION['password']) {
          echo '<input type="password" placeholder="Введите Пароль" name="pass" value="' . $_SESSION['password'] . '">';
        } else {
          echo '<input type="password" placeholder="Введите Пароль" name="pass">';
        }
        unset($_SESSION['No_password']);
        unset($_SESSION['password']);
        ?>
        <label>Подтвердите пароль</label>
        <?php
        if ($_SESSION['No_password_confirm']) {
          echo '<p class="msg">' . $_SESSION['No_password_confirm'] . '</p>';
          echo '<input type="password" placeholder="Подтвердите пароль" name="pass_confirm">';
        } else {
          echo '<input type="password" placeholder="Подтвердите пароль" name="pass_confirm">';
        }
        unset($_SESSION['No_password_confirm']);
        ?>
        <label>Изображение профиля</label>
        <?php
        if ($_SESSION['foto']) {
          echo '<p class="msg">' . $_SESSION['foto'] . '</p>';
        }
        unset($_SESSION['foto']);
        ?>
        <input type="file" name="avatar">
        <label>Контактный номер</label>
        <?php
        if ($_SESSION['No_number']) {
          echo '<p class="msg">' . $_SESSION['No_number'] . '</p>';
          echo '<input type="text" placeholder="Введите Контактный номер" name="Number">';
        } else if ($_SESSION['number']) {
          echo '<input type="text" placeholder="Введите Контактный номер" name="Number" value="' . $_SESSION['number'] . '">';
        } else {
          echo '<input type="text" placeholder="Введите Контактный номер" name="Number">';
        }
        unset($_SESSION['No_number']);
        unset($_SESSION['number']);
        ?>
        <label>E-mail для восстановления</label>
        <?php
        if ($_SESSION['No_Recovery_Email']) {
          echo '<p class="msg">' . $_SESSION['No_Recovery_Email'] . '</p>';
          echo '<input type="text" placeholder="Введите E-mail для восстановления" name="Recovery_Email">';
        } else if ($_SESSION['Recovery_Email']) {
          echo '<input type="text" placeholder="Введите E-mail для восстановления" name="Recovery_Email" value="' . $_SESSION['Recovery_Email'] . '">';
        } else {
          echo '<input type="text" placeholder="Введите E-mail для восстановления" name="Recovery_Email">';
        }
        unset($_SESSION['No_Recovery_Email']);
        unset($_SESSION['Recovery_Email']);
        ?>
        <input type="hidden" name="form_id" value="2">
        <button type="submit">Зарегистрироваться</button>
        <p>У вас есть аккаунт?<a href="SignIn.php"> Войти</a></p>
      </form>
    </div>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>KURSOURCE</h3>
            <p>
              Каталог проверенных<br />
              онлайн-курсов и<br />
              обучающих программ<br />
              от лучших экспертов<br /><br />
              <strong>Email:</strong> info@kursource.ru<br />
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Навигация</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="index.php">Главная</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="about.php">О нас</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="courses.php">Курсы</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="trainers.php">Авторы</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="events.php">События</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Направления курсов</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Программирование</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Маркетинг</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Дизайн</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Игры</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          <div id="current_date_time_block2">
            <script type="text/javascript" type="text/javascript">
              let d = new Date();
              setInterval(function() {
                document.getElementById('current_date_time_block2').innerHTML = '&copy ' + d.getFullYear() + " г.";
              }, );
            </script>
          </div> <strong><span>KURSOURCE</span></strong>. Все права защищены.
        </div>
        <div class="credits">
          <a href="soglashenie.php">Политика конфиденциальности</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="vk"><i class="bx bxl-vk"><img src="assets/img/svg/vk.svg" alt="" /></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"><img src="assets/img/svg/fb.svg" alt="" /></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"><img src="assets/img/svg/inst.svg" alt="" /></i></a>
        <a href="#" class="telegram"><i class="bx bxl-telegram"><img src="assets/img/svg/tg.svg" alt="" /></i></a>
        <a href="#" class="youtube"><i class="bx bxl-youtube"><img src="assets/img/svg/yt.svg" alt="" /></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>