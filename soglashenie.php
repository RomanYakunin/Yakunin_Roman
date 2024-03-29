<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Пользовательское соглашение и политика конфиденциальности | KURSOURCE-Видеохостинг курсов</title>
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
        <h2>Пользовательское соглашение и политика конфиденциальности</h2>
        
      </div>
    </div>
	<!-- End Breadcrumbs -->

    <!-- ======= Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          <h2>ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ</h2>

</br>

<h3>1. Общие положения</h3>

1.1. Настоящее Пользовательское соглашение (далее – Соглашение) относится к сайту «KURSOURCE - видеокурсы по IT», расположенному по адресу https://kursource.ru/.

1.2. Сайт «KURSOURCE - видеокурсы по IT» (далее – Сайт) является собственностью физического лица (Габдуллин Ильяс Ленарович).

1.3. Настоящее Соглашение регулирует отношения между Администрацией сайта «KURSOURCE - видеокурсы по IT» (далее – Администрация сайта) и Пользователем данного Сайта.

1.4. Администрация сайта оставляет за собой право в любое время изменять, добавлять или удалять пункты настоящего Соглашения без уведомления Пользователя.

1.5. Использование Сайта Пользователем означает принятие Соглашения и изменений, внесенных в настоящее Соглашение.

1.6. Пользователь несет персональную ответственность за проверку настоящего Соглашения на наличие изменений в нем.

<h3>2. Определения терминов</h3>

2.1. Перечисленные ниже термины имеют для целей настоящего Соглашения следующее значение:

2.1.1 «KURSOURCE - видеокурсы по IT» – Интернет-ресурс, расположенный на доменном имени https://kursource.ru/, осуществляющий свою деятельность посредством Интернет-ресурса и сопутствующих ему сервисов (далее - Сайт).

2.1.2. «KURSOURCE - видеокурсы по IT» – сайт, содержащий информацию о Товарах и/или Услугах и/или Иных ценностях для пользователя, Продавце и/или Исполнителе услуг, позволяющий осуществить выбор, заказ и (или) приобретение Товара, и/или получение услуги.

2.1.3. Администрация сайта – уполномоченные сотрудники на управление Сайтом, действующие от имени физического лица Габдуллин Ильяс Ленарович.

2.1.4. Пользователь сайта (далее - Пользователь) – лицо, имеющее доступ к Сайту, посредством сети Интернет и использующее Сайт.

2.1.5. Содержание сайта (далее – Содержание) - охраняемые результаты интеллектуальной деятельности, включая тексты литературных произведений, их названия, предисловия, аннотации, статьи, иллюстрации, обложки, музыкальные произведения с текстом или без текста, графические, текстовые, фотографические, производные, составные и иные произведения, пользовательские интерфейсы, визуальные интерфейсы, названия товарных знаков, логотипы, программы для ЭВМ, базы данных, а также дизайн, структура, выбор, координация, внешний вид, общий стиль и расположение данного Содержания, входящего в состав Сайта и другие объекты интеллектуальной собственности все вместе и/или по отдельности, содержащиеся на сайте https://kursource.ru/.

<h3>3. Предмет соглашения</h3>

3.1. Предметом настоящего Соглашения является предоставление Пользователю доступа к содержащимся на Сайте Товарам и/или оказываемым услугам.

3.1.1. Сайт предоставляет Пользователю следующие виды услуг (сервисов):
- доступ к электронному контенту на платной основе, с правом приобретения (скачивания), просмотра контента;
- доступ к средствам поиска и навигации сайта;
- предоставление Пользователю возможности размещения сообщений, комментариев, рецензий Пользователей, выставления оценок контенту сайта;
- доступ к информации о Товаре и/или услуге к информации о приобретении Товара на платной/бесплатной основе;

3.1.2. Под действие настоящего Соглашения подпадают все существующие (реально функционирующие) на данный момент услуги (сервисы) Сайта, а также любые их последующие модификации и появляющиеся в дальнейшем дополнительные услуги (сервисы).

3.2. Доступ к сайту предоставляется на платной и на бесплатной основах.

3.3. Настоящее Соглашение является публичной офертой. Получая доступ к Сайту, Пользователь считается присоединившимся к настоящему Соглашению.

3.4. Использование материалов и сервисов Сайта регулируется нормами действующего законодательства Российской Федерации.

<h3>4. Права и обязанности сторон</h3>

4.1. Администрация сайта вправе:

4.1.1. Изменять правила пользования Сайтом, а также изменять содержание данного Сайта. Изменения вступают в силу с момента публикации новой редакции Соглашения на Сайте.

4.2. Пользователь вправе:

4.2.1. Пользоваться всеми имеющимися на Сайте услугами, а также приобретать любые Товары и/или Услуги, предлагаемые на Сайте.

4.2.2. Задавать любые вопросы, относящиеся к услугам сайта: по электронной почте: info@kursource.ru

4.2.3. Пользоваться Сайтом исключительно в целях и порядке, предусмотренных Соглашением и не запрещенных законодательством Российской Федерации.

4.2.4. Копировать информацию с Сайта разрешается с указанием источника и согласия администрации сайта.

4.2.5. Требовать от администрации скрытия любой информации о пользователе.

4.2.6. Использовать информацию сайта для личных некоммерческих целей.

4.3. Пользователь Сайта обязуется:

4.3.1. Предоставлять по запросу Администрации сайта дополнительную информацию, которая имеет непосредственное отношение к предоставляемым услугам данного Сайта.

4.3.2. Соблюдать имущественные и неимущественные права авторов и иных правообладателей при использовании Сайта.

4.3.3. Не предпринимать действий, которые могут рассматриваться как нарушающие нормальную работу Сайта.

4.3.4. Не распространять с использованием Сайта любую конфиденциальную и охраняемую законодательством Российской Федерации информацию о физических либо юридических лицах.

4.3.5. Избегать любых действий, в результате которых может быть нарушена конфиденциальность охраняемой законодательством Российской Федерации информации.

4.3.6. Не использовать Сайт для распространения информации рекламного характера, иначе как с согласия Администрации сайта.

4.3.7. Не использовать сервисы с целью:

4.3.7.1. нарушения прав несовершеннолетних лиц и (или) причинение им вреда в любой форме.

4.3.7.2. ущемления прав меньшинств.

4.3.7.3. представления себя за другого человека или представителя организации и (или) сообщества без достаточных на то прав, в том числе за сотрудников данного сайта.

4.3.7.4. введения в заблуждение относительно свойств и характеристик какого-либо Товара и/или услуги, размещенных на Сайте.

4.3.7.5. некорректного сравнения Товара и/или Услуги, а также формирования негативного отношения к лицам, (не) пользующимся определенными Товарами и/или услугами, или осуждения таких лиц.

4.3.7.6. загрузки контента, который является незаконным, нарушает любые права третьих лиц; пропагандирует насилие, жестокость, ненависть и (или) дискриминацию по расовому, национальному, половому, религиозному, социальному признакам; содержит недостоверные сведения и (или) оскорбления в адрес конкретных лиц, организаций, органов власти.

4.3.7.7. побуждения к совершению противоправных действий, а также содействия лицам, действия которых направлены на нарушение ограничений и запретов, действующих на территории Российской Федерации.

4.3.8. Обеспечить достоверность предоставляемой информации.

4.3.9. Обеспечивать сохранность личных данных от доступа третьих лиц.

4.4. Пользователю запрещается:

4.4.1. Использовать любые устройства, программы, процедуры, алгоритмы и методы, автоматические устройства или эквивалентные ручные процессы для доступа, приобретения, копирования или отслеживания содержания Сайта.

4.4.2. Нарушать надлежащее функционирование Сайта.

4.4.3. Любым способом обходить навигационную структуру Сайта для получения или попытки получения любой информации, документов или материалов любыми средствами, которые специально не представлены сервисами данного Сайта.

4.4.4. Несанкционированный доступ к функциям Сайта, любым другим системам или сетям, относящимся к данному Сайту, а также к любым услугам, предлагаемым на Сайте.

4.4.5. Нарушать систему безопасности или аутентификации на Сайте или в любой сети, относящейся к Сайту.

4.4.6. Выполнять обратный поиск, отслеживать или пытаться отслеживать любую информацию о любом другом Пользователе Сайта.

4.4.7. Использовать Сайт и его Содержание в любых целях, запрещенных законодательством Российской Федерации, а также подстрекать к любой незаконной деятельности или другой деятельности, нарушающей права Сайта или других лиц.

<h3>5. Использование сайта</h3>

5.1. Сайт и Содержание, входящее в состав Сайта, принадлежит и управляется Администрацией сайта.

5.2. Содержание Сайта защищено авторским правом, законодательством о товарных знаках, а также другими правами, связанными с интеллектуальной собственностью, и законодательством о недобросовестной конкуренции.

5.3. Настоящее Соглашение распространяет свое действия на все дополнительные положения и условия о покупке Товара и/или оказанию услуг, предоставляемых на Сайте.

5.4. Информация, размещаемая на Сайте не должна истолковываться как изменение настоящего Соглашения.

5.5. Администрация сайта имеет право в любое время без уведомления Пользователя вносить изменения в перечень Товаров и услуг, предлагаемых на Сайте, и (или) их цен.

5.6. Документ указанный в пункте 5.7 настоящего Соглашения регулирует в соответствующей части и распространяют свое действие на использование Пользователем Сайта:

5.7. Настоящее Соглашение может подлежать обновлению. Изменения вступают в силу с момента их опубликования на Сайте.

<h3>6. Ответственность</h3>

6.1. Любые убытки, которые Пользователь может понести в случае умышленного или неосторожного нарушения любого положения настоящего Соглашения, а также вследствие несанкционированного доступа к коммуникациям другого Пользователя, Администрацией сайта не возмещаются.

6.2. Администрация сайта не несет ответственности за:

6.2.1. Задержки или сбои в процессе совершения операции, возникшие вследствие непреодолимой силы, а также любого случая неполадок в телекоммуникационных, компьютерных, электрических и иных смежных системах.

6.2.2. Действия систем переводов, банков, платежных систем и за задержки связанные с их работой.

6.2.3. Надлежащее функционирование Сайта, в случае, если Пользователь не имеет необходимых технических средств для его использования, а также не несет никаких обязательств по обеспечению пользователей такими средствами.

<h3>7. Нарушение условий пользовательского соглашения</h3>

7.1. Администрация сайта имеет право раскрыть информацию о Пользователе, если действующее законодательство Российской Федерации требует или разрешает такое раскрытие.

7.2. Администрация сайта вправе без предварительного уведомления Пользователя прекратить и (или) заблокировать доступ к Сайту, если Пользователь нарушил настоящее Соглашение или содержащиеся в иных документах условия пользования Сайтом, а также в случае прекращения действия Сайта либо по причине технической неполадки или проблемы.

7.3. Администрация сайта не несет ответственности перед Пользователем или третьими лицами за прекращение доступа к Сайту в случае нарушения Пользователем любого положения настоящего Соглашения или иного документа, содержащего условия пользования Сайтом.

7.4. Администрация сайта имеет право раскрыть любую информацию о Пользователе, которую посчитает необходимой для выполнения положений действующего законодательства или судебных решений, обеспечения выполнения условий настоящего Соглашения, защиты прав или безопасности организации, Пользователей.

<h3>8. Разрешение споров</h3>

8.1. В случае возникновения любых разногласий или споров между Сторонами настоящего Соглашения обязательным условием до обращения в суд является предъявление претензии (письменного предложения о добровольном урегулировании спора).

8.2. Получатель претензии в течение 30 календарных дней со дня ее получения, письменно уведомляет заявителя претензии о результатах рассмотрения претензии.

8.3. При невозможности разрешить спор в добровольном порядке любая из Сторон вправе обратиться в суд за защитой своих прав, которые предоставлены им действующим законодательством Российской Федерации.

8.4. Любой иск в отношении условий использования Сайта должен быть предъявлен в течение 5 дней после возникновения оснований для иска, за исключением защиты авторских прав на охраняемые в соответствии с законодательством материалы Сайта. При нарушении условий данного пункта любой иск оставляется судом без рассмотрения.

<h3>9. Дополнительные условия</h3>

9.1. Администрация сайта не принимает встречные предложения от Пользователя относительно изменений настоящего Пользовательского соглашения.

9.2. Отзывы Пользователя, размещенные на Сайте, не являются конфиденциальной информацией и могут быть использованы Администрацией сайта без ограничений.

<hr>
</br>
<h2>ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</h2>

</br>

Настоящая Политика конфиденциальности персональной информации (далее — Политика) действует в отношении всей информации, которую администрация сайта kursource.ru и/или аффилированные лица, могут получить о пользователе во время использования им сайта kursource.ru.

Использование сайта kursource.ru означает безоговорочное согласие пользователя с настоящей Политикой и указанными в ней условиями обработки его персональной информации; в случае несогласия с этими условиями пользователь должен воздержаться от использования данного ресурса.

<h3>1. Персональная информация пользователей, которую получает и обрабатывает сайт</h3>

1.1. В рамках настоящей Политики под «персональной информацией пользователя» понимаются:

1.1.1. Персональная информация, которую пользователь предоставляет о себе самостоятельно при оставлении заявки, совершении покупки, регистрации (создании учётной записи) или в ином процессе использования сайта.

1.1.2 Данные, которые автоматически передаются сайтом kursource.ru в процессе его использования с помощью установленного на устройстве пользователя программного обеспечения, в том числе IР-адрес, информация из сооkie, информация о браузере пользователя (или иной программе, с помощью которой осуществляется доступ к сайту), время доступа, адрес запрашиваемой страницы.

1.1.3. Данные, которые предоставляются сайту, в целях осуществления оказания услуг и/или продаже товара и/или предоставления иных ценностей для посетителей сайта, в соответствии с деятельностью настоящего ресурса:
- имя
- электронная почта
- месторасположение
- ссылка на персональный сайт или соцсети
- iр адрес.

1.2. Настоящая Политика применима только к сайту kursource.ru и не контролирует и не несет ответственность за сайты третьих лиц, на которые пользователь может перейти по ссылкам, доступным на сайте kursource.ru. На таких сайтах у пользователя может собираться или запрашиваться иная персональная информация, а также могут совершаться иные действия.

1.3. Сайт в общем случае не проверяет достоверность персональной информации, предоставляемой пользователями, и не осуществляет контроль за их дееспособностью. Однако сайт kursource.ru исходит из того, что пользователь предоставляет достоверную и достаточную персональную информацию по вопросам, предлагаемым в формах настоящего ресурса, и поддерживает эту информацию в актуальном состоянии.

<h3>2. Цели сбора и обработки персональной информации пользователей</h3>

2.1. Сайт собирает и хранит только те персональные данные, которые необходимы для оказания услуг и/или продаже товара и/или предоставления иных ценностей для посетителей сайта kursource.ru. 

2.2. Персональную информацию пользователя можно использовать в следующих целях:

2.2.1 Связь с пользователем, в том числе направление уведомлений, запросов и информации, касающихся использования сайта, оказания услуг, а также обработка запросов и заявок от пользователя 

2.2.2 Улучшение качества сайта, удобства его использования, разработка новых товаров и услуг

2.2.3 Таргетирование рекламных материалов

2.2.4 Проведение статистических и иных исследований на основе предоставленных данных

2.2.5 Передача данных третьим лицам, в целях осуществления деятельности ресурса (например доставка товара курьером, транспортной компанией и иные).

<h3>3. Условия обработки персональной информации пользователя и её передачи третьим лицам</h3>

3.1. Сайт хранит персональную информацию пользователей в соответствии с внутренними регламентами конкретных сервисов. 

3.2. В отношении персональной информации пользователя сохраняется ее конфиденциальность, кроме случаев добровольного предоставления пользователем информации о себе для общего доступа неограниченному кругу лиц.

3.3. Сайт kursource.ru вправе передать персональную информацию пользователя третьим лицам в следующих случаях: 

3.3.1. Пользователь выразил свое согласие на такие действия, путем согласия выразившегося в предоставлении таких данных; 

3.3.2. Передача необходима в рамках использования пользователем определенного сайта kursource.ru, либо для предоставления товаров и/или оказания услуги пользователю;

3.3.3. Передача предусмотрена российским или иным применимым законодательством в рамках установленной законодательством процедуры;

3.3.4. В целях обеспечения возможности защиты прав и законных интересов сайта kursource.ru или третьих лиц в случаях, когда пользователь нарушает Пользовательское соглашение сайта kursource.ru.

3.4. При обработке персональных данных пользователей сайт kursource.ru руководствуется Федеральным законом РФ «О персональных данных».

<h3>4. Изменение пользователем персональной информации</h3> 

4.1. Пользователь может в любой момент изменить (обновить, дополнить) предоставленную им персональную информацию или её часть, а также параметры её конфиденциальности, оставив заявление в адрес администрации сайта следующим способом: kursources@yandex.ru. Пользователь может в любой момент, отозвать свое согласие на обработку персональных данных, оставив заявление в адрес администрации.

<h3>5. Меры, применяемые для защиты персональной информации пользователей</h3>

Сайт принимает необходимые и достаточные организационные и технические меры для защиты персональной информации пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий с ней третьих лиц.

<h3>6. Изменение Политики конфиденциальности. Применимое законодательство</h3>

6.1. Сайт имеет право вносить изменения в настоящую Политику конфиденциальности. При внесении изменений в актуальной редакции указывается дата последнего обновления. Новая редакция Политики вступает в силу с момента ее размещения, если иное не предусмотрено новой редакцией Политики.

6.2. К настоящей Политике и отношениям между пользователем и Сайтом, возникающим в связи с применением Политики конфиденциальности, подлежит применению право Российской Федерации.

<h3>7. Обратная связь. Вопросы и предложения</h3>

7.1. Все предложения или вопросы по поводу настоящей Политики следует направлять следующим способом: Email: info@kursource.ru
        </div>

      </div>
    </section>
	<!-- End Events Section -->

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
              let d=new Date();
                setInterval(function () {
                    document.getElementById('current_date_time_block2').innerHTML = '&copy '+ d.getFullYear() +" г."; 
                }, );
            </script></div> <strong><span>KURSOURCE</span></strong>. Все права защищены.
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