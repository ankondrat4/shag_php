
<?php
define('API_URL','https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');

$json_dec=json_decode(file_get_contents(API_URL),true);


?>


<!-- "RGB-калькулятор​" -->

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
        <div class="container">
            <h1 class="mb-3">Change bg.</h1>
            <div class="row"> <?php
                $r=$_GET['r'];
                $g=$_GET['g'];
                $b=$_GET['b']; 
                ?>   
                <div class="col-3 rounded p-2" style="background-color: rgb(<?= $r ?>,<?= $g ?>,<?= $b ?>)">
                    <form method="" action="" enctype="application/x-www-form-urlencoded">
                        <div class="mb-3">
                            <label for="r" class="form-label">R</label>
                            <input type="number" name="r" value="" id="r" class="form-control" placeholder="R-value" min="0" max="255">
                        </div>
                        <div class="mb-3">
                            <label for="g" class="form-label">G</label>
                            <input type="number" name="g" value="" id="g" class="form-control" placeholder="G-value" min="0" max="255">
                        </div>
                        <div class="mb-3">
                            <label for="b" class="form-label">B</label>
                            <input type="number" name="b" value="" id="b" class="form-control" placeholder="B-value" min="0" max="255">
                        </div>
                        <input type="submit" name="go" class="btn btn-primary" value="Change background!"></input>
                    </form>
                </div>
            </div>
        </div>
<ul>
    <?php foreach($json_dec as $item):?>
    <li> <?= $item['ccy'].'/'.$item['base_ccy'].'&nbsp;|&nbsp;'.$item['buy'].'|'.$item['sale']?></li>
 <?php endforeach ?>
</ul>
        <!-- JS includes -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>