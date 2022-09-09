<?php
session_start();
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($db_host, $db_user, $db_password, $database)
  or die("Ошибка " . mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Курсы | KURSOURCE-Видеохостинг курсов</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">

</head>
<style>
  .container_image {
    position: relative;
    width: 100%;
    max-width: 400px;
  }

  .image {
    display: block;
    width: 93%;
    height: auto;
  }

  .overlay {
    border-radius: 0% 0% 50% 0%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 13%;
    width: 7%;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    background-color: #A21FB6;
  }

  .container_image:hover .overlay {
    opacity: 1;
  }

  .icon {
    color: white;
    font-size: 100px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
  }

  .fa-user:hover {
    color: #eee;
  }
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">KURSOURCE</a></h1>
      <!-- logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a href="about.php">О нас</a></li>
          <li><a class="active" href="courses.php">Курсы</a></li>
          <li><a href="trainers.php">Авторы</a></li>
          <li><a href="events.php">События</a></li>
          <?php
          if ($_SESSION['user']) {
            echo '<li><a href="./Profile.php">Личный кабинет</a></li>';
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

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Курсы</h2>
        <p>В нашем каталоге курсов Вы найдёте именно то что вам нужно. Для удобного поиска воспользуйтесь фильтрами по направлениям и параметрам курсов. </p>
      </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- <div class="d1">
      <form>
        <input type="text" placeholder="Искать здесь..." >
        <button type="submit"></button>
      </form>
    </div> -->
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">




          <div class="col-lg-3 col-md-4 mt-4">

            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"><img src="assets/img/svg/game.svg" alt=""></i>
              <h3><a href="courses.php?theme=Программирование">Программирование</a></h3>
            </div>

          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"><img src="assets/img/svg/marketing.svg" alt=""></i>
              <h3><a href="courses.php?theme=Маркетинг">Маркетинг</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"><img src="assets/img/svg/design.svg" alt=""></i>
              <h3><a href="courses.php?theme=Дизайн">Дизайн</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"><img src="assets/img/svg/programming.svg" alt=""></i>
              <h3><a href="courses.php?theme=Игры">Игры</a></h3>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <?php
          if ($_REQUEST['theme']) {
            $theme = $_REQUEST['theme'];
            $query = "SELECT * FROM `videocourses` WHERE `Theme`='$theme' ";
            $Message = 'По вашему запросу ничего не найдено';
          } else {
            $query = "SELECT * FROM `videocourses` ORDER BY RAND()";
            $Message = 'Нет видеокурсов';
          }
          $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
          $row = mysqli_fetch_array($result);
          if ($row > 0) {

            echo "<div class='row' data-aos='zoom-in' data-aos-delay='100'>";
            while ($row != NULL) {
              $id = $row['Id_Videocourse'];
              $image = $row['Image'];
              $name = $row['Name_Videocorse'];
              $theme = $row['Theme'];
              $cost = $row['Cost'];
              $Description = $row['Description'];
              $Difficulties = $row['Difficulties'];
              $Number_Views = $row['Number_Views'];
              $Course_Duration = $row['Course_Duration'];
              $Video_Link = $row['Video_File'];
              if ($Difficulties == 'Простой') {
                $color = 'green';
              } else {
                if ($Difficulties == 'Средний') {
                  $color = 'orange';
                } else {
                  if ($Difficulties == 'Сложный') {
                    $color = 'red';
                  }
                }
              }
              echo "
            <div class='col-lg-4 col-md-6 d-flex align-items-stretch'>
            <div class='course-item'>
            
            <div class='container_image'>
<a href='course-details.php?course=$id'><img src='$image' class='img-fluid' alt='...'></a>
  <div class='overlay'><a href='checkFavourite.php?favourite=$id'>";
              $user = $_SESSION['user']['Id_User'];
              $query_favourite = "SELECT * FROM `favourites`  WHERE `Id_Videocourse`='$id' AND `Id_User`='$user'";
              $result_favourite = mysqli_query($link, $query_favourite) or die("Ошибка " . mysqli_error($link));
              $row_favourite = mysqli_fetch_array($result_favourite);
              if ($row_favourite > 0) {
                $img = './assets/img/icon-star-activ.png';
              } else {
                $img = './assets/img/icon-star-no_activ.png';
              }
              echo " <img src='$img' class='image'>
    <a href='' class='icon' title='User Profile'>
    </a></a>
  </div>
</div> <div class='course-content'>
                <div class='d-flex justify-content-between align-items-center mb-3'>
                  <h4>$theme</h4>";
              if (!($cost == 'Бесплатно')) {
                echo " <p class='price'>$cost рублей</p>";
              } else {
                echo " <p class='price'>$cost</p>";
              }
              echo "</div>
                <h3><a href='course-details.php?course=$id'>$name</a></h3>
                <p>$Description</p>
                <div class='trainer d-flex justify-content-between align-items-center'>
                  <div class='trainer-profile d-flex align-items-center'>
                    <img src='' class='img-fluid' alt=''>
                    <font color=$color>$Difficulties</font>
                  </div>
                   <div class='trainer-rank d-flex align-items-center'>
                    <i class='bx bx-user'>$Number_Views Просмотров</i>&nbsp;
                    &nbsp;&nbsp;
                    <i class='bx bx-heart'>$Course_Duration</i>&nbsp;
                  </div>
                </div>
              </div>
            </div>
            </div>";
              $row = mysqli_fetch_array($result);
            }
            echo "</div>";
          } else {
            echo "<h4 align='center'>$Message</h4>";
          }
          ?>
        </div>

      </div>
    </section>
    <!-- End Courses Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>KURSOURCE</h3>
            <p>
              Каталог проверенных<br>
              онлайн-курсов и<br>
              обучающих программ<br>
              от лучших экспертов<br><br>
              <strong>Email:</strong> info@kursource.ru<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Программирование</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Маркетинг</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Дизайн</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Игры</a></li>
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
        <a href="#" class="vk"><i class="bx bxl-vk"><img src="assets/img/svg/vk.svg" alt=""></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"><img src="assets/img/svg/fb.svg" alt=""></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"><img src="assets/img/svg/inst.svg" alt=""></i></a>
        <a href="#" class="telegram"><i class="bx bxl-telegram"><img src="assets/img/svg/tg.svg" alt=""></i></a>
        <a href="#" class="youtube"><i class="bx bxl-youtube"><img src="assets/img/svg/yt.svg" alt=""></i></a>

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