<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
   
    try {
         return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
         exit('اتصال به پایگاه داده انجام نشد!');
    }
}
function template_header($title) {

echo <<<EOT
<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>$title</title>
          <link href="style.css" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
     </head>
     <body>
        <header>
            <div class="content-wrapper">
            <h1>زیورآلات سحر</h1>
                <nav>
                    <a href="index.php"><b>صفحه اصلی</b></a>
                    <a href="index.php?page=products"><b>محصولات</b></a>
                    <a href="index.php?page=ma"><b>درباره ما</b></a>
                </nav>
                <div class="link-icons">
                <a href="index.php?page=cart">
                <i class="fas fa-shopping-cart"></i>
              
                </a>
            </div>
            </div>
        </header>
        <main>
EOT;
}

?>