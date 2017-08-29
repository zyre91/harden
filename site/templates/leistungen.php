<?php snippet('header'); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
            <section class="harden-section p-0">
                <?php snippet('page-header', array(
                    'page_title' => $page->title()->html(),
                    'page_intro_title' => $page->page_header_title()->html(),
                    'page_intro_text' => $page->page_header_subtitle()->html()
                )) ?>
            </section>
        </div>
    </div>
</div>
<div class="container">
    <?php snippet('services-list', array('services' => $page->services_list()->toStructure())) ?>
</div>
<div class="container">
    <hr class="m-60-0">
    <div class="row">
        <div class="col-xs-12">
            <?php foreach($page->transport_options_list()->toStructure() as $transport_option) : ?>
            <ul class="list-unstyled transport-list">
                <li class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <?php if ($transport_option->transport_option_image()->isNotEmpty()): ?>
                        <img class="img-responsive m-bottom-20" src="<?= $page->image($transport_option->transport_option_image())->url() ?>" alt="<?= $transport_option->transport_option_title()->html() ?>">
                        <?php else: ?>
                        <img class="img-responsive m-bottom-20" src="http://placehold.it/300x200" alt="<?= $transport_option->transport_option_title()->html() ?>">
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-9">
                        <h2 class="h3 m-top-0">
                        <?= $transport_option->transport_option_title()->html() ?>
                        </h2>
                        <p>
                            <?= $transport_option->transport_option_text()->html() ?>
                        </p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <hr class="m-60-0">
</div>
<div class="services-product-slider-wrapper">
<?php 
$products_page = page('produkte');
snippet('products-slider-section', array(
    'title' => $products_page->product_slider_title()->html(),
    'subtitle' => $products_page->product_slider_subtitle()->html(),
    'products' => $products_page->children()->visible()
));
?>
</div>
<?php snippet('footer') ?>