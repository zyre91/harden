<article class="harden-product-list-item">
    <div class="product-list-item-image" style="background-image: url(<?= $product->product_image()->isNotEmpty() ? $product->image($product->product_image())->url() : 'http://placehold.it/270x150?text=Produkt' ?>)"></div>
    <h1><?= $product->product_title()->html() ?></h1>
    <p><?= $product->product_desc_small()->short(200) ?></p>
    <div class="product-list-item-price-wrapper">
        <div class="pull-left">
            <span class="product-list-item-price-price"><?= $product->product_price()->html() ?></span>
            <span class="product-list-item-price-additional"><?= $product->product_price_additional_info()->html() ?></span>
        </div>
        <div class="pull-right">
            <a class="product-list-item-link" title="Zum Produkt" href="<?= $product->url() ?>">
                <div class="glyphicon glyphicon-circle-arrow-right"></div>
            </a>
        </div>
    </div>
</article>