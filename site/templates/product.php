<?php snippet('header') ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <section class="text-center">
                    <h1><?= $page->product_title()->html() ?></h1>
                    <p><?= $page->product_desc_large()->html() ?></p>
                </section>
                <?php snippet('product-tabs', array('product' => $page)) ?>
            </div>
        </div>
    </div>

<?php snippet('footer') ?>