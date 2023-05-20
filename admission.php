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

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <ul class="me-auto mb-2 mb-lg-0 w-100" style="background-color: #e3f2fd;">
      <div class="container navbar-nav">
      
        <li class="nav-item">
          <a class="nav-link" href="index.php">Главная</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="news.php">Новости</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="education.php">Образование</a>
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
          <a class="nav-link bg-warning fw-bold" href="admission.php">Условия поступления</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="achievements.php">Наши достижения</a>
        </li>
  
        <? if(isset($_SESSION['email'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Админ панель</a>
          </li>
        <? endif; ?>
      </div>
      
    </ul>
  </nav>

  <main class="container mb-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card">

          <div class="card-header">
            <h3>Условия поступления и пребывания детей в ДОУ</h3>
          </div>

          <div class="card-body">
            <h5>УСЛОВИЯ ПОСТУПЛЕНИЯ</h5>  
              В ДОУ принимаются дети в возрасте от 1,6 до 7 лет. <br> 
              Прием детей осуществляется заведующим ДОУ на основании:<br> 
              -  Медицинского заключения;<br> 
              -  Заявления родителей (законных представителей);<br> 
              -  Документов, удостоверяющих личность одного из родителей (законных представителей);<br> 
              -  Направление УО администрации г. Канска.<br><br>  
              <h5>ПРЕБЫВАНИЕ ДЕТЕЙ</h5> 
              ДОУ работает 5 дней в неделю, группы общеразвивающей направленности с 7.00 до 19.00 часов, группы компенсирующей направленности с 7.15 до 18.45 часов. Прием детей осуществляется с 7.00 до 8.00. Выходные – суббота, воскресенье. Праздничные дни являются нерабочими днями. В предпраздничные дни ДОУ работает с 7.00 до 18.00 часов. 
              Максимальная продолжительность непрерывного бодрствования детей 3-7 лет в ДОУ составляет 5,5-6 часов. Дневной сон детей дошкольного возраста составляет 2-2,5 часа. Для детей от 1,5 до 3 лет дневной сон организуется однократно продолжительностью не менее 3 часов. Во время сна детей в спальне присутствует воспитатель или младший воспитатель. <br><br>  
              Ежедневная продолжительность прогулки детей составляет не менее 4-4,5 часов. Прогулки в ДОУ организуются 2 раза в день: в первую половину – до обеда и во вторую половину дня – после дневного сна или перед уходом детей домой. При температуре воздуха ниже -15 градусов С и скорости ветра более 7 м/с продолжительность прогулки сокращается. Прогулка не проводится при температуре воздуха ниже -15 градусов С и скорости ветра более 15 м/с для детей до 4 лет, а для детей 5 – 7 лет при температуре воздуха ниже -20 градусов С и скорости ветра более 15 м/с.<br><br> 
              Непосредственно образовательная деятельность (НОД) начинается в 9.00 часов утра. В середине занятий проводятся физкультминутки. Перерывы между периодами НОД – не менее 10 минут. Количество проведения НОД в учебном плане не превышает максимально допустимый объем недельной образовательной нагрузки.<br><br> 
              Общее количество непосредственно образовательной деятельности в неделю по группам:  

              <table class="my-3">
                <thead>
                  <tr>
                    <th class="border p-2">Группа</th>
                    <th class="border p-2">КоличествоНОД</th>
                    <th class="border p-2">Продолжительность занятия</th>
                  </tr>
                </thead>
                <tbody>
          
                  <tr>
                    <td class="border p-2">Первая младшая группа общеразвивающей направленности (от 2-х до 3-х лет)</td>
                    <td class="border p-2">10</td>
                    <td class="border p-2">до 10 минут</td>
                  </tr>
          
                  <tr>
                    <td class="border p-2">Вторая младшая группа общеразвивающей направленности (от 3-х до 4-х лет)</td>
                    <td class="border p-2">11</td>
                    <td class="border p-2">не более 15 минут</td>
                  </tr>
          
                  <tr>
                    <td class="border p-2">Средняя   группа общеразвивающей направленности (от 4-х до 5-х лет)</td>
                    <td class="border p-2">12</td>
                    <td class="border p-2">не более 20 минут</td>
                  </tr>
          
                  <tr>
                    <td class="border p-2">Старшая группа общеразвивающей направленности (от 5-ти до 6-ти лет)</td>
                    <td class="border p-2">15</td>
                    <td class="border p-2">не более 25 минут</td>
                  </tr>
          
                  <tr>
                    <td class="border p-2">Подготовительная к школе группа общеразвивающей направленности (от 6-ти до 7-ти лет)</td>
                    <td class="border p-2">17</td>
                    <td class="border p-2">не более 30 минут</td>
                  </tr>
          
                  <tr>
                    <td class="border p-2">Вторая младшая группа компенсирующей направленности</td>
                    <td class="border p-2">16</td>
                    <td class="border p-2">не более 15 минут</td>
                  </tr>
          
                  <tr>
                    <td class="border p-2">Средняя группа компенсирующей направленности</td>
                    <td class="border p-2">16</td>
                    <td class="border p-2">не более 20 минут</td>
                  </tr>
          
                </tbody>
              </table>

              Для детей раннего возраста от 1,5 до 3 лет допускается осуществлять образовательную деятельность в первую и во вторую половину дня. Допускается осуществлять образовательную деятельность на игровой площадке во время прогулки. Образовательная деятельность с детьми старшего дошкольного возраста может осуществляться во второй половине дня после дневного сна. Её продолжительность должна составлять не более 25-30 минут в день.
              
            </div>
          </div>
        </div>
      </div>



    <!--<div class="row justify-content-center">

      <div class="col-11">
        <div class="card">
          <h3 class="card-header">Условия поступления и пребывания детей в ДОУ</h3>
          <div class="card-body">
            <h5>УСЛОВИЯ ПОСТУПЛЕНИЯ</h5>
            
            В ДОУ принимаются дети в возрасте от 1,6 до 7 лет. <br>
          
            Прием детей осуществляется заведующим ДОУ на основании:<br>
            
            -  Медицинского заключения;<br>
            
            -  Заявления родителей (законных представителей);<br>
            
            -  Документов, удостоверяющих личность одного из родителей (законных представителей);<br>
            
            -  Направление УО администрации г. Канска.<br><br>
            
            <h5>ПРЕБЫВАНИЕ ДЕТЕЙ</h5>
            
            ДОУ работает 5 дней в неделю, группы общеразвивающей направленности с 7.00 до 19.00 часов, группы компенсирующей направленности с 7.15 до 18.45 часов. Прием детей осуществляется с 7.00 до 8.00. Выходные – суббота, воскресенье. Праздничные дни являются нерабочими днями. В предпраздничные дни ДОУ работает с 7.00 до 18.00 часов.
            
            Максимальная продолжительность непрерывного бодрствования детей 3-7 лет в ДОУ составляет 5,5-6 часов. Дневной сон детей дошкольного возраста составляет 2-2,5 часа. Для детей от 1,5 до 3 лет дневной сон организуется однократно продолжительностью не менее 3 часов. Во время сна детей в спальне присутствует воспитатель или младший воспитатель. <br><br>
            
            Ежедневная продолжительность прогулки детей составляет не менее 4-4,5 часов. Прогулки в ДОУ организуются 2 раза в день: в первую половину – до обеда и во вторую половину дня – после дневного сна или перед уходом детей домой. При температуре воздуха ниже -15 градусов С и скорости ветра более 7 м/с продолжительность прогулки сокращается. Прогулка не проводится при температуре воздуха ниже -15 градусов С и скорости ветра более 15 м/с для детей до 4 лет, а для детей 5 – 7 лет при температуре воздуха ниже -20 градусов С и скорости ветра более 15 м/с.<br><br>
            
            Непосредственно образовательная деятельность (НОД) начинается в 9.00 часов утра. В середине занятий проводятся физкультминутки. Перерывы между периодами НОД – не менее 10 минут. Количество проведения НОД в учебном плане не превышает максимально допустимый объем недельной образовательной нагрузки.<br><br>
            
            Общее количество непосредственно образовательной деятельности в неделю по группам: <br>
            
            <table class="my-3">
              <thead>
                <tr>
                  <th class="border p-2">Группа</th>
                  <th class="border p-2">КоличествоНОД</th>
                  <th class="border p-2">Продолжительность занятия</th>
                </tr>
              </thead>
              <tbody>
        
                <tr>
                  <td class="border p-2">Первая младшая группа общеразвивающей направленности (от 2-х до 3-х лет)</td>
                  <td class="border p-2">10</td>
                  <td class="border p-2">до 10 минут</td>
                </tr>
        
                <tr>
                  <td class="border p-2">Вторая младшая группа общеразвивающей направленности (от 3-х до 4-х лет)</td>
                  <td class="border p-2">11</td>
                  <td class="border p-2">не более 15 минут</td>
                </tr>
        
                <tr>
                  <td class="border p-2">Средняя   группа общеразвивающей направленности (от 4-х до 5-х лет)</td>
                  <td class="border p-2">12</td>
                  <td class="border p-2">не более 20 минут</td>
                </tr>
        
                <tr>
                  <td class="border p-2">Старшая группа общеразвивающей направленности (от 5-ти до 6-ти лет)</td>
                  <td class="border p-2">15</td>
                  <td class="border p-2">не более 25 минут</td>
                </tr>
        
                <tr>
                  <td class="border p-2">Подготовительная к школе группа общеразвивающей направленности (от 6-ти до 7-ти лет)</td>
                  <td class="border p-2">17</td>
                  <td class="border p-2">не более 30 минут</td>
                </tr>
        
                <tr>
                  <td class="border p-2">Вторая младшая группа компенсирующей направленности</td>
                  <td class="border p-2">16</td>
                  <td class="border p-2">не более 15 минут</td>
                </tr>
        
                <tr>
                  <td class="border p-2">Средняя группа компенсирующей направленности</td>
                  <td class="border p-2">16</td>
                  <td class="border p-2">не более 20 минут</td>
                </tr>
        
              </tbody>
            <table>
            Для детей раннего возраста от 1,5 до 3 лет допускается осуществлять образовательную деятельность в первую и во вторую половину дня. Допускается осуществлять образовательную деятельность на игровой площадке во время прогулки. Образовательная деятельность с детьми старшего дошкольного возраста может осуществляться во второй половине дня после дневного сна. Её продолжительность должна составлять не более 25-30 минут в день.
          </div>
          <div class="card-footer">
            asdzxc
          </div>
        </div>
      </div>

    </div>-->
  </main>

  <footer class="d-flex justify-content-space-between w-100 text-center">
    <div class="col-3">
      МБДОУ №34 "Ромашка"© 2023 <br>
      <a href="admin.php" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Я администратор</a>
    </div>
    <div class="col-3">
      г. Канск, пер. Индустриальный, 4
    </div>
    <div class="col-3">
      mbdou-34@yandex.ru
    </div>
    <div class="col-3">
      8-(39161)-3-42-44
    </div>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>