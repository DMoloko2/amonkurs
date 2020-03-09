<!doctype html>
<html lang="en">
  <head>
    <title>Checkout example · Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {          font-size: 3.5rem;        }
      }
      .container {  max-width: 960px; padding: 15px;}
      .lh-condensed { line-height: 1.25; }
      .col-md-8 {flex: 0 0 100%;    max-width: 100%;}

    </style>

  </head>
  <body class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3"><?php $i = 0; echo $test[0]->name; ?></h4> <!-- СЮДА ВСТАВИТЬ НАЗВАНИЕ ТЕСТА -->
          <form id="idDataForm" method="post">

            <?php foreach ($test as  $value): ?>
              <div class="form-group">
                <label><?php echo $value->question; ?></label>
                <select class="form-control" name="<?php echo $i; $i++; ?>">
                  <option value="<?php echo $value->correct_answer ?>"><?php echo $value->correct_answer ?></option>
                  <option value="<?php echo $value->answer_1 ?>"><?php echo $value->answer_1 ?></option>
                  <option value="<?php echo $value->answer_2 ?>"><?php echo $value->answer_2 ?></option>
                </select>
              </div>
            <?php endforeach; ?>

          </form>

          <hr class="mb-4">
          <button class="btn btn-lg btn-block btn-outline-primary" type="submit" form="idDataForm" formaction="/amoncurs/Main_controllers/testValidate?idUser=<?php echo $idUser; ?>&idTest=<?php echo $test[0]->id_test; ?>">Готово</button>
      </div>
    </div>
  </div>

      </body>
</html>
