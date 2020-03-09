<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style type="text/css">
      html {
        font-size: 14px;
      }
      @media (min-width: 768px) {
        html {font-size: 16px;}
      }

      .container {max-width: 960px;}

      .pricing-header {max-width: 700px;}

      .card-deck .card {min-width: 220px;}

      .border-top { border-top: 1px solid #e5e5e5; }
      .border-bottom { border-bottom: 1px solid #e5e5e5; }

      .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
      .botcls{
        bottom: auto;
      }
      </style>
  </head>

  <body>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Выбор теста</h1>
      <!-- <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p> -->
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">РХБЗ</h4>
          </div>
          <div class="card-body">
            <h4 class="">Тест по основам РХБЗ</h4>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Вы прошли тест:</li>
              <li>Дата:результат</li>
              <li>Дата:результат</li>
              <li>Дата:результат</li>
            </ul>
            <a class="btn btn-lg btn-block btn-outline-primary botcls" href="/amoncurs/Main_controllers/showtest?idUser=<?php echo $idUser ?>&idCategory=1">Пройти тест</a>
          </div>
        </div>



        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Огневая подготовка</h4>
          </div>
          <div class="card-body">
            <h4 class="card-title pricing-card-title">Тест по основам огневой подготовки</h4>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Вы прошли тест:</li>
              <li>Дата:результат</li>
              <li>Дата:результат</li>
              <li>Дата:результат</li>
            </ul>
            <a class="btn btn-lg btn-block btn-outline-primary" href="/amoncurs/Main_controllers/showtest?idUser=<?php echo $idUser ?>&idCategory=2">Пройти тест</a>
          </div>
        </div>


        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Огневая подготовка</h4>
          </div>
          <div class="card-body">
            <h4 class="card-title pricing-card-title">Тест по основам огневой подготовки</h4>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Вы прошли тест:</li>
              <li>Дата:результат</li>
              <li>Дата:результат</li>
              <li>Дата:результат</li>
            </ul>
            <a class="btn btn-lg btn-block btn-outline-primary" href="#">Пройти тест</a>
          </div>
        </div>


        <!-- <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Тест 3</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
          </div>
        </div> -->



      </div>
    </div>


  </body>
</html>
