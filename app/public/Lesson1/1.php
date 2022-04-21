<html>
<head>
  <title>Тестируем PHP</title>
</head>
<body>
<?php
$message = isset($_GET['name']) ? '<h1>Hello '.$_GET['name'].'!</h1>' :'<h1>Hello world!</h1>';
echo $message;
?>
</body>
</html>