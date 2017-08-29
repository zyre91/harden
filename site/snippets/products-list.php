<div class="row harden-products-list">
    <?php foreach($products as $product) : ?>
        <div class="col-xs-12 col-sm-3">
            <?php snippet('product-list-item', array('product' => $product)) ?>
        </div>
    <?php endforeach; ?>
    <?php foreach($empty_products as $empty_product) : ?>
        <div class="col-xs-12 col-sm-3">
            <?php snippet('product-list-item-empty', array('product' => $empty_product)) ?>
        </div>
    <?php endforeach; ?>
</div>