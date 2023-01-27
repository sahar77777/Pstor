<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
      session_start();
      include 'functions.php';
      $pdo = pdo_connect_mysql();
      $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
      include $page . '.php';
?>
    </body>
</html>
