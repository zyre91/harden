<section class="harden-section">

    <div class="container">
    
        <div class="row text-center">
        
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <h1 class="harden-section-page-title">
                    Produkte
                </h1>

                <h2 class="harden-section-title">
                    <?= $title ?>
                </h2>

                <p class="harden-section-subtitle">
                    <?= $subtitle ?>
                </p>
            </div>
        
        </div>
    
    </div>

</section>
<div class="container">
    <?php snippet('product-slider', array('products' => $products)) ?>
</div>