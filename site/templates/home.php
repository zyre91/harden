<?php snippet('header') ?>

<div class="harden-carousel-home">
    <div class="harden-carousel-home-item" style="background-image:url(<?= $page->image('hero@3x.jpg')->url() ?>)"></div>
</div>

<?php 
$product_page = page('produkte');
snippet('products-slider-section', array(
    'title' => $product_page->product_slider_title()->html(),
    'subtitle' => $product_page->product_slider_subtitle()->html(),
    'products' => $product_page->children()->visible()
));
?>

<?php snippet('services-section', array(
    'services_section_title' => $page->services_section_title()->html(),
    'services_section_subtitle' => $page->services_section_subtitle()->html(),
    'services_section_content' => $page->services_section_content()->markdown()    
)) ?>

<?php snippet('news-section', array(
    'title' => $page->news_section_title()->html(),
    'subtitle' => $page->news_section_subtitle()->html(),
    'news_articles' => page('aktuelles')->children()->visible()
)) ?>

<section class="harden-section harden-section-sand">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-push-6">
                <h1 class="harden-section-page-title">Unternehmen</h1>
                <h2 class="harden-section-title"><?= $page->company_section_title()->html() ?></h2>
                <p class="harden-section-subtitle"><?= $page->company_section_subtitle()->html() ?></p>
                <?= $page->company_section_content()->markdown() ?>
                <button class="btn btn-success btn-lg">
                    Mehr erfahren
                </button>
            </div>
            <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                
            </div>
        </div>
    </div>

</section>

<section class="harden-section">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <?php snippet('page-header', array(
                    'page_title' => 'Für Privatkunden',
                    'page_intro_title' => $page->direct_sale_section_title()->html(),
                    'page_intro_text' => $page->direct_sale_section_subtitle()->html()
                )) ?>
                <?= $page->direct_sale_section_content()->markdown() ?>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div id="harden-map" data-latlng='<?= $page->direct_sale_section_latlng() ?>'></div>
            </div>
        </div>
    </div>

</section>

<?php snippet('footer') ?>