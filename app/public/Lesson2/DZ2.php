<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Таблиця з числами</title>
    <style>
      table {
        border: 2px solid black;
      }
      /* границы ячеек первого ряда таблицы */
      th {
        border: 2px solid grey;
        padding: 15px;
      }
      /* границы ячеек тела таблицы */
      td {
        border: 2px solid grey;
        padding: 15px;
      }
    </style>
</head>
<body>
<div class="container">
    <h1 class="mb-3">Таблиця з числами</h1>
    <table>
      <?php
      for($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for($j = 1; $j <= 10; $j++) {
            echo "<td>".$j*$i."</td>";
        }
        echo "</tr>";
      }
      ?>
    </table>
    <!-- JS includes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
