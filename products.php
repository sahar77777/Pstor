<?php
$num_products_on_each_page = 4;
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;

$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT ?,?');
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
?>
<?=template_header('صفحه محصولات')?>

<div class="products content-wrapper">
    <h1>محصولات ما</h1>
    <b> تعداد کل محصولات: <?=$total_products?></b>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
            <?=$product['price']?>﷼
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp"><?=$product['rrp']?>﷼</span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
   
</div>

