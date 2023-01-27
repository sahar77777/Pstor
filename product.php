<?php
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
  
    if (!$product) {
        exit('محصولی وجود ندارد!');
    }
} else {
    exit('محصولی وجود ندارد!');
}
?>
<?=template_header('صفحه محصول')?>
<div class="product content-wrapper">
    <img src="imgs/<?=$product['img']?>" width="500" height="500" alt="<?=$product['name']?>">
    <div>
        <h1 class="name"><?=$product['name']?></h1>
        <span class="price">
            <?=$product['price']?> ﷼
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp"><?=$product['rrp']?>﷼</span>
            <?php endif; ?>
        </span>
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" value="افزودن به سبد خرید">
        </form>
       
        <div class="description">

    

            <?=$product['desc']?>
        </div>
    </div>
</div>
S