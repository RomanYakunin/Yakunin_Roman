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
  <title>KURSOURCE - видеокурсы по IT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">KURSOURCE</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Главная</a></li>
          <li><a href="about.php">О нас</a></li>
          <li><a href="courses.php">Курсы</a></li>
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
      <?php
      if (!$_SESSION['user']) {
        echo '<a href="SignIn.php" class="get-started-btn">Войти</a>';
      }
      ?>
    </div>
  </header>
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Видеокурсы по IT<br>от экспертов и тренеров</h1>
      <h2>Каталог проверенных онлайн-курсов и обучающих программ
        от лучших российских экспертов</h2>
      <a href="courses.php" class="btn-get-started">Войти</a>
    </div>
  </section>
  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>О платформе</h3>
            <p class="fst-italic">
              У нас можно получить знания по востребованным специальностям и направлениям в сфере Информационных технологий.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Все курсы нацелены на практику.</li>
              <li><i class="bi bi-check-circle"></i> Мы следим за актуальностью материала.</li>
              <li><i class="bi bi-check-circle"></i> Все эксперты проходят тщательную модерацию.</li>
              <li><i class="bi bi-check-circle"></i> Изучайте материал на платформе в любое удобное время.</li>
              <li><i class="bi bi-check-circle"></i> Выполняйте практические задания и закрепляйте знания.</li>
              <li><i class="bi bi-check-circle"></i> Общайтесь с экспертами и единомышленниками в Telegram.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <?php
            $check_user = mysqli_query($link, "SELECT * FROM `users`");
            $col = mysqli_num_rows($check_user);
            echo "<span data-purecounter-start='0' data-purecounter-end='$col' data-purecounter-duration='1' class='purecounter'></span>";
            ?>
            <p>Пользователей</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <?php
            $check_course = mysqli_query($link, "SELECT * FROM `videocourses`");
            $col = mysqli_num_rows($check_course);
            echo "<span data-purecounter-start='0' data-purecounter-end='$col' data-purecounter-duration='1' class='purecounter'></span>";
            ?>
            <p>Курсов</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
            <p>Мероприятий</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Экспертов</p>
          </div>
        </div>
      </div>
    </section>
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Почему наши эксперты?</h3>
              <p>
                Мы проводим модерацию всех авторов и школ перед публикацией. Учитываем отзывы и репутацию в сети, собственный опыт общения.
              </p>
              <div class="text-center">
                <a href="trainers.php" class="more-btn">Эксперты <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx"><img src="assets/img/svg/list.svg" alt=""></i>
                    <p></p>
                    <h4>Обновляемый каталог курсов</h4>
                    <p>Четыре основных направления обучения, среди которых каждый найдет что-то для себя. Простой и удобный фильтр поможет в этом.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx"><img src="assets/img/svg/love.svg" alt=""></i>
                    <p></p>
                    <h4>Рейтинг курсов и экспертов</h4>
                    <p>Призываем голосовать и делиться впечатлениями о курсах и авторах. Ваш опыт помогает другим сделать выбор.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx"><img src="assets/img/svg/author.svg" alt=""></i>
                    <p></p>
                    <h4>Вы автор курсов?</h4>
                    <p>Если у вас есть качественный информационный продукт, то вы можете стать нашим экспертом. Мы рады сотрудничать с вами.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"><img src="assets/img/svg/game.svg" alt=""></i>
              <h3><a href="">Программирование</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"><img src="assets/img/svg/marketing.svg" alt=""></i>
              <h3><a href="">Маркетинг</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"><img src="assets/img/svg/design.svg" alt=""></i>
              <h3><a href="">Дизайн</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"><img src="assets/img/svg/programming.svg" alt=""></i>
              <h3><a href="">Игры</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Курсы</h2>
          <p>Избранные курсы</p>
        </div>
        <?php
        $id = $_SESSION['user']['Id_User'];
        $query = "SELECT * FROM `favourites` WHERE `Id_User`='$id'";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        $row = mysqli_fetch_array($result);
        if ($row > 0) {
          echo "<div class='row' data-aos='zoom-in' data-aos-delay='100'>";
          while ($row != NULL) {
            $id_course = $row['Id_Videocourse'];
            $query_course = "SELECT * FROM `videocourses` WHERE `Id_Videocourse`='$id_course'";
            $result_course = mysqli_query($link, $query_course) or die("Ошибка " . mysqli_error($link));
            $row_course = mysqli_fetch_array($result_course);
            if ($row_course > 0) {
              $image = $row_course['Image'];
              $name = $row_course['Name_Videocorse'];
              $theme = $row_course['Theme'];
              $cost = $row_course['Cost'];
              $Description = $row_course['Description'];
              $Difficulties = $row_course['Difficulties'];
              $Number_Views = $row_course['Number_Views'];
              $Course_Duration = $row_course['Course_Duration'];
              $Video_Link = $row_course['Video_File'];
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
            <a href='course-details.php?course=$id_course'><img src='$image' class='img-fluid' alt='...'></a>
              <div class='course-content'>
                <div class='d-flex justify-content-between align-items-center mb-3'>
                  <h4>$theme</h4>";
              if (!($cost == 'Бесплатно')) {
                echo " <p class='price'>$cost рублей</p>";
              } else {
                echo " <p class='price'>$cost</p>";
              }
              echo "</div>
                <h3><a href='course-details.php?course=$id_course'>$name</a></h3>
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
          }
          echo "</div>";
        } else {
          echo ' <h5>Нет Избранных</h5>';
        }
        ?>
      </div>
    </section>
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Антон Хрумов</h4>
                <span>Веб-разработчик</span>
                <p>
                  Автор образовательных программ по обучению графике, дизайну и запуску успешных бизнесов в интернете.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Елена Логова</h4>
                <span>Маркетолог</span>
                <p>
                  Предприниматель-практик, эксперт по запуску и масштабированию бизнеса, по работе с партнёрскими программами.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Ильяс Дотов</h4>
                <span>Программист</span>
                <p>
                  Инженер-программист в среде C#. Автор обучающих онлайн-курсов по разработке архитектуры программного обеспечения.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
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
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>