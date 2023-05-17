<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Детский сад №34</title>
</head>
<body class="position-relative">
  
  <div class="top w-100"></div>
  <div class="bot w-100"></div>

  <header class="container">
    <div class="row justify-space-between">

      <div class="col-10">
        <h1>Детский сад</h1>
        <h2>номер 34</h2>
      </div>

      <div class="col-2">
        <h2>г.Канск</h2>
        <b class="normal-font">8 (39161) 3-42-44</b>
      </div>
      
    </div>
  </header>

  <nav class="navbar navbar-expand-lg bg-body-tertiary container">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item">
        <a class="nav-link" href="index.php">Главная</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="news.php">Новости</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="education.php">Образование</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="head.php">Руководство</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="provision.php">Обеспечение</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="service.php">Платные услуги</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="admission.php">Условия поступления</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="achievements.php">Наши достижения</a>
      </li>

      <? if(isset($_SESSION['email'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Админ панель</a>
        </li>
      <? endif; ?>

    </ul>
  </nav>

  <main class="container mb-5">
    <div class="row justify-content-center">
      <div class="col-11">
        <h3>Образование</h3>

        <h5 class="mt-3">Документы</h5>
        <a href="https://dou34.kansk24.ru/images/OBRAZOVANIE/oop2021.pdf">Основная образовательная программа дошкольного образования (ООП ДОУ)</a><br>
        <a href="https://dou34.kansk24.ru/images/OBRAZOVANIE/prilogenie1Koop2022.pdf">Перспективное календарно-тематическое планирование (приложение № 1 к ООП ДОУ)</a><br>
        <a href="https://dou34.kansk24.ru/images/OBRAZOVANIE/prilogenie2Koop2022.pdf">Расписание непосредственно-образовательной деятельности (приложение № 2 к ООП ДОУ)</a><br>
        <a href="https://dou34.kansk24.ru/images/OBRAZOVANIE/prilogenie3Koop2021.pdf">Программа воспитания (приложение № 3 к ООП ДОУ)</a><br>
        <a href="https://dou34.kansk24.ru/images/OBRAZOVANIE/u4ebniiPlan20222023.pdf">Учебный план на 2022 - 2023 учебный год</a><br>
        <a href="https://dou34.kansk24.ru/images/OBRAZOVANIE/u4PlanPlatnie20222023.pdf">Учебный план 2022 - 2023гг. по предоставлению платных услуг</a><br>
        <a href="https://dou34.kansk24.ru/images/OBRAZOVANIE/tnr2019.pdf">Адаптированная основная образовательная программа ДО для детей с ТНР (ОНР)</a><br>
        <a href="https://dou34.kansk24.ru/images/OBRAZOVANIE/aoopZPR2020.pdf">Адаптированная основная образовательная программа ДО для детей ЗПР</a><br>
        <a href="https://dou34.kansk24.ru/images/OBRAZOVANIE/AOOPumstvennoOTSTAL.pdf">Адаптированная основная образовательная программа для детей с умственной отсталостью (интеллектуальными нарушениями)</a><br>
        <a href="https://dou34.kansk24.ru/images/OBRAZOVANIE/dopolnitprogramma.pdf">Дополнительная общеразвивающая программа "ПУТЕШЕСТВИЕ ПО ВОЛШЕБНОЙ СТРАНЕ ЗНАНИЙ"</a><br>
        <a href="https://dou34.kansk24.ru/index.php?option=com_content&view=article&layout=edit&id=472&Itemid=39">Методические и иные документы, разработанные образовательной организацией для обеспечения образовательного процесса</a><br><br>

        Реализуемый уровень образования - дошкольный, <br>

        Форма обучения - очная (дневная). <br>

        Срок получения дошкольного образования устанавливается ФГОС ДО - 5 лет (дети с 2-ух до 7-ми лет). <br>

        Язык на котором осуществляется образование - русский. <br>

        "Практика не осуществляется" <br>

        Информация об использовании при реализации образовательных программ электронного обучения и дистанционных образовательных технологий - ОТСУТСТВУЕТ. <br>

        В МБДОУ  реализуется Основная образовательная программа дошкольного образования. Программа определяет содержание и организацию воспитательно-образовательного процесса для детей групп общеразвивающей и компенсирующей направленности детского сада и обеспечивает формирование у детей общей культуры, развитие физических, интеллектуальных и личностных качеств, формирование предпосылок учебной деятельности, обеспечивающих социальную успешность, сохранение и укрепление здоровья детей. <br>
      
        Содержание дошкольного образования и условия организации обучения и воспитания детей с ограниченными возможностями здоровья в Учреждении определяются адаптированной образовательной программой. <br>
      
        Дошкольное образование детей с ограниченными возможностями здоровья в Учреждении может быть организовано как совместно с другими воспитанниками, так и в отдельных группах.<br>
    
        Группы в МБДОУ имеют общеразвивающую, компенсирующую, комбинированную направленность.<br>

        Детский сад работает в условиях пятидневной учебной недели 12-часового рабочего дня.<br>

        Режим работы дошкольного учреждения – 12 часов, рабочая неделя – 5 дней.<br>

        Даты начала и конца соответствующих периодов в каждом учебном году могут незначительно изменяться.<br>

        с 1 сентября по 15 сентября – адаптационный период;<br>
        с 17 сентября по 21 декабря – образовательный период;<br>
        с 24 декабря по 31 декабря –   новогодние каникулы;<br>
        с 1 января по 14 января – «творческие» каникулы (в это время дети вместе с родителями или воспитателями посещают театры, специалисты проводят вечера развлечения, соревнования);<br>
        с 15 января по 30 мая – образовательный период.<br>
        В дошкольном учреждении образовательная деятельность осуществляется на государственном языке Российской Федерации.<br>

        Форма получения дошкольного образования осуществляется по основной образовательной программе ДО. <br>

        Решая задачу создания каждому дошкольнику условий для наиболее полного раскрытия его возрастных возможностей и способностей, в МБДОУ реализуются парциальные образовательные программы:<br>

        - «Природа и художник», Т.А. Копцева;<br>

        - «Ладушки» И. Каплунова, И. Новоскольцева.<br>

        - «Мой любимый город Канск»<br><br>

        Численность обучающихся:<br>

        - общая численность - 233 человек;<br>

        численность обучающихся за счет бюджетных ассигнований федерального бюджета (в т.ч. с выделением численности инностранных граждан) - 0 человек;<br>

        - численность обучающихся за счет бюджетных ассигнований бюджетов субъектов Российской Федерации (в т.ч. с выделением численности инностранных граждан) - 233 человек;<br>

        - численность обучающихся за счет бюджетных ассигнований местных бюджетов (в т.ч. с выделением численности инностранных граждан) - 0 человек<br>

        - численность обучающихся по договорам об образовании, заключаемых при приеме на обучением за счет средств физического и (или) юридического лица (ДОГОВОР ОБ ОКАЗАНИИ ПЛАТНЫХ ОБРАЗОВАТЕЛЬНЫХ УСЛУГ) (в т.ч. с выделением численности инностранных граждан) - 127 человека<br>


      </div>

      <div class="col-2 mt-3 mb-3">
        <a href="admin.php" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Я администратор</a>
      </div>
      <div class="col-10"></div>


    </div>
  </main>

  <footer class="d-flex justify-space-between text-center text-secondary w-100">
    <div class="w-25">
      МБДОУ №34 "Ромашка"© 2023
    </div>
    <div class="w-25">
      г. Канск, пер. Индустриальный, 4
    </div>
    <div class="w-25">
      mbdou-34@yandex.ru
    </div>
    <div class="w-25">
      8-(39161)-3-42-44
    </div>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>