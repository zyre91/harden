<div class="row product-slider">
    <?php foreach($products as $product) : ?>
    <div class="col-xs-12 col-sm-4 col-md-3">
            <?php snippet('product-list-item', array('product' => $product)) ?>
    </div>
    <?php endforeach; ?>
</div>