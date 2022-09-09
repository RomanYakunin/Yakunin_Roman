<?php
session_start();
if (!$_SESSION['user']){
  header('Location: ./SignIn.php');
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Оплата курса | KURSOURCE-Видеохостинг курсов</title>
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
  <link href="assets/css/style1.css" rel="stylesheet" />
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
        <h2>Оплата курса</h2>
        <p>Введите данные для оплаты</p>
      </div>
    </div>
    <!-- End Breadcrumbs -->
    <br />
   
    <div align='center'>
      <form action="checkPayment.php" method="POST">
        <?php
      if ($_SESSION['payment']) {
          echo '<p class="msg">' . $_SESSION['payment'] . '</p>';
        }
        unset($_SESSION['payment']);
        ?>
        <label>Номер карты</label>
        <?php
        if ($_SESSION['No_Card']) {
          echo '<p class="msg">' . $_SESSION['No_Card'] . '</p>';
          echo '<input type="text" placeholder="Например: 1234-5678-9101-1213" name="Card">';
        } else if ($_SESSION['Card']) {
          echo '<input type="\d [0-9]" placeholder="Например: 1234-5678-9101-1213" name="Card" value="' . $_SESSION['Card'] . '">';
        } else {
          echo '<input type="text" placeholder="Например: 1234-5678-9101-1213" name="Card">';
        }
        unset($_SESSION['No_Card']);
        unset($_SESSION['Card']);
        ?>
        <label>Стоимость</label>
        <input type="text" placeholder="Введите Стоимость Видеокурса" name="Cost" value='<?=$_REQUEST['cost']?>'>
        <input type="hidden" name="id_user" value="<?=$_REQUEST['id_user']?>">
        <input type="hidden" name="id_course" value="<?=$_REQUEST['course']?>">
        <input type="hidden" name="form_id" value="4">
        <button type="submit">Оплатить</button>
        <p> </p>
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
  <script>
        //Код jQuery, установливающий маску для ввода телефона элементу input
        //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
        $(function(){
          //2. Получить элемент, к которому необходимо добавить маску
          $("#phone").mask("8(999) 999-9999");
        });
        </script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>