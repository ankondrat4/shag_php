<?php
define('API_URL', 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
$data = json_decode(file_get_contents(API_URL), true);
?>

<!-- "Курс валют Приватбанк" -->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <title>RGB-Calculator</title>
</head>
<body>
  <ul>
    <?php foreach($data as $item): ?>
      <li><?= $item['ccy'].'/'.$item['base_ccy'].' | '.$item['buy'].'/'.$item['sale']?></li>
    <?php endforeach ?>
  </ul>
</body>
</html>

