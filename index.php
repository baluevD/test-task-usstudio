<!DOCTYPE html>
<html language="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CSV File to HTML Table by PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="table-responsive">
      <div id="table">
        <table class="table table-bordered table-striped">
          <?
            $response = file_get_contents('http://frontend.usdev.ru/tarif.csv');
            $rows = explode("\n", $response);
            for($i = 0; $i <= count($rows); ++$i){
              if (!isset($rows[$i][0])) continue;
              $cells = explode(",",$rows[$i]);
              if ($i == 0){ ?>
                <thead>
                <?
                  foreach($cells as $cell){ ?>
                    <th><? echo $cell; ?></th>
                  <? } ?>
                </thead>
              <? }
              else { ?>
                <tr>
                  <?
                    foreach($cells as $cell){ ?>
                      <td><? echo $cell; ?></td>
                    <? } ?>
                </tr>
              <? } ?>
            <? } ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
