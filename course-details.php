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
  <?php
  if (@$_REQUEST['course']) {
    $id = $_REQUEST['course'];
    $query = "SELECT * FROM `videocourses` WHERE `Id_Videocourse`='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $row = mysqli_fetch_assoc($result);
    $id = $row['Id_Videocourse'];
    $autor = $row['Id_Author'];
    $image = $row['Image'];
    $name = $row['Name_Videocorse'];
    $theme = $row['Theme'];
    $cost = $row['Cost'];
    $Description = $row['Description'];
    $Difficulties = $row['Difficulties'];
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
    $Number_Views = $row['Number_Views'];
    $Course_Duration = $row['Course_Duration'];
    $Video_Link = $row['Video_File'];
    $Blocked = $row['Blocked'];
    $Date = $row['Date_Publication'];
    $query_user = "SELECT * FROM `users` WHERE `Id_User`='$autor'";
    $result_user = mysqli_query($link, $query_user) or die("Ошибка " . mysqli_error($link));
    $row_user = mysqli_fetch_assoc($result_user);
    $id_user = $row_user['Id_User'];
    $Last_name = $row_user['Last_Name'];
    $First_name = $row_user['First_Name'];
    $query_views = "UPDATE `videocourses` SET `Number_Views` = '$Number_Views' + 1 WHERE `Id_Videocourse` = '$id'";
    $result_views = mysqli_query($link, $query_views) or die("Ошибка " . mysqli_error($link));

    if (!($cost == 'Бесплатно')) {
    }
    echo "<title>$name</title>";
  }
  ?>

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
  <link href="assets/css/review.css" rel="stylesheet" />
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">KURSOURCE</a></h1>
      <!-- logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?= $name ?></h2>
        <p>Детальная информация о курсе</p>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="<?= $image ?>" class="img-fluid" alt="">
            <h3>Обучение Java программированию</h3>
            <p>
              <?= $Description ?>
            </p>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Автор</h5>
              <p><a href="#"><?= $Last_name . ' ' . $First_name ?></a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Стоимость</h5>
              <?php
              if (!($cost == 'Бесплатно')) {
                echo " <p class='price'>$cost рублей</p>";
              } else {
                echo " <p class='price'>$cost</p>";
              }
              ?>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Тема</h5>
              <p><?= $theme ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Продолжительность</h5>
              <p><?= $Course_Duration ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Уровень сложности</h5>
              <font color=<?= $color ?>>
                <p><?= $Difficulties ?></p>
              </font>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Количество просмотров</h5>
              <p><?= $Number_Views ?></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Дата публикации</h5>
              <p><?= $Date ?></p>
            </div>
            <div align='center'>
              <?php
              if (!($cost == 'Бесплатно')) {

                if ($autor == $_SESSION['user']['Id_User']) {
                  echo "</div>
                      </div>
                      <iframe width='100%' height='600px' src='https://www.youtube.com/embed/$Video_Link' title='YouTube video player' frameborder='0' 
                        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                } else {
                  //Проверка наличия оплаты
                  $user = $_SESSION['user']['Id_User'];
                  $check_cost = mysqli_query($link, "SELECT * FROM `payment` WHERE `Id_Videocourse`='$id' AND `Id_User`='$user'");
                  if (mysqli_num_rows($check_cost) > 0) {
                    echo "</div>
                      </div>
                    </div>
                    <iframe width='100%' height='600px' src='https://www.youtube.com/embed/$Video_Link' title='YouTube video player' frameborder='0' 
                      allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                  } else {
                    $user = $_SESSION['user']['Id_User'];
                    echo " <a href='Payment.php?cost=$cost&id_user=$user&course=$id' class='get-started-btn'>Оплатить</a>";
                    $Video_Link = ' ';
                    echo "</div>
                            </div>
                          </div>
                       <h3 align='center'>Видео будет доступно после оплаты </h3>";
                  }
                }
              } else {
                echo "</div>
        </div>
      </div>
      <iframe width='100%' height='600px' src='https://www.youtube.com/embed/$Video_Link' title='YouTube video player' frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
              }
              ?>
            </div>
    </section>
    <form action=checkReview.php method="POST">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Написать озыв</p>
          <?php
          if ($_SESSION['No_Review']) {
            echo '<h5 class="msg">' . $_SESSION['No_Review'] . '</h5>';
          }
          unset($_SESSION['No_Review']);
          ?>
          <br />
          <div>
            <?php
            if ($_SESSION['Review']) {
              echo '<textarea rows="4" cols="60" name="comment">' . $_SESSION['Review'] . '</textarea>';
            } else {
              echo '<textarea rows="4" cols="50" name="comment"></textarea>';
            }
            unset($_SESSION['Review']);
            ?>
            <input type='hidden' name="id_course" value="<?= $id ?>">
          </div>
          <button type="submit">Оставить отзыв</button>
        </div>
    </form>
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Отзывы</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
            $query_review = "SELECT * FROM `reviews` WHERE `Id_Videocourse`='$id'";
            $result_review = mysqli_query($link, $query_review) or die("Ошибка " . mysqli_error($link));
            $row_review = mysqli_fetch_array($result_review);
            if ($row_review > 0) {
              while ($row_review != NULL) {
                $review = $row_review['Text'];
                $id_user_review = $row_review['Id_User'];
                $date_review = $row_review['Date'];
                $query_user_review = "SELECT * FROM `users` WHERE `Id_User`='$id_user_review'";
                $result_user_review = mysqli_query($link, $query_user_review) or die("Ошибка " . mysqli_error($link));
                $row_user_review = mysqli_fetch_array($result_user_review);
                $image_user = $row_user_review['Image'];
                $Last_name_review = $row_user_review['Last_Name'];
                $First_name_review = $row_user_review['First_Name'];
                echo " <div class='swiper-slide'>
              <div class='testimonial-wrap'>
                <div class='testimonial-item'>
                  <img src='$image_user' class='testimonial-img' alt=''>
                  <h3>$Last_name_review $First_name_review</h3>
                  <h4>$date_review</h4>
                  <p>
                    <i class='bx bxs-quote-alt-left quote-icon-left'></i>
                    $review
                    <i class='bx bxs-quote-alt-right quote-icon-right'></i>
                  </p>
                </div>
              </div>
            </div>";
                $row_review = mysqli_fetch_array($result_review);
              }
            } else {
              echo '<h5>Нет отзывов</h5>';
            }
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
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