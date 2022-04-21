<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>RGB-Calculator</title>
    <style>
        .square {
          width: 30px;
          height: 30px;
          border: 1px solid #ccc;
          display: inline-block;
          margin: 1px;
          padding: 2px;
          color: white;
          text-align: center;
        }
    </style>
</head>
<body>
<?php
    $colors = [
        "blue" => "Синій",
        "red" => "Червоний",
        "yellow" => "Жовтий",
        "black" => "Чорний",
        "green" => "Зелений",
    ];
    $rows = (isset($_GET['rows'])) ? $_GET['rows'] : 0;
    $cols = (isset($_GET['cols'])) ? $_GET['cols'] : 0;
    $color = !isset($_GET['color']) ? "white" : $_GET['color'];
?>

<div class="container">
    <h1 class="mb-3">Build table div.</h1>
    <div class="row">
        <div class="col-3 rounded p-2">
            <form method="" action="" enctype="application/x-www-form-urlencoded">
                <div class="mb-3">
                    <label for="rows" class="form-label">Max rows</label>
                    <input type="number" name="rows" value="" id="rows" class="form-control" placeholder="rows-value" min="0" max="255">
                </div>
                <div class="mb-3">
                    <label for="cols" class="form-label">Max cols</label>
                    <input type="number" name="cols" value="" id="cols" class="form-control" placeholder="cols-value" min="0" max="255">
                </div>
                <select class="form-select" name="color">
                  <?php foreach($colors as $key=>$value){
                    echo "<option value='$key'>$value</option>";
                  }
                  ?>
                </select>
                <br>
                <input type="submit" name="go" class="btn btn-primary" value="Built it!"></input>
            </form>
        </div>
    </div>
</div>

<div class="container">
<?php for($i = 0; $i < $rows; $i++): ?>
  <?php for($j = 0; $j < $cols; $j++): ?>
        <div class="square" style="background-color:<?=$color?>";><?= ($i+1).($j+1) ?></div>
  <?php endfor ?>
    <br>
<?php endfor ?>
</div>
<!-- JS includes -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
