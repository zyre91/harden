<?php snippet('header') ?>

<section class="harden-section">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                <?php snippet('page-header', array(
                    'page_title' => $page->title()->html(),
                    'page_intro_title' => $page->page_header_title()->html(),
                    'page_intro_text' => $page->page_header_subtitle()->html()
                )) ?>
            </div>
        </div>
    </div>

</section>
<div class="container">
    <?php snippet('products-list', array('products' => $page->children()->visible(), 'empty_products' => $page->empty_products()->toStructure())) ?>
</div>

<hr>

<?php snippet('services-section', array(
    'services_section_title' => page('home')->services_section_title()->html(),
    'services_section_subtitle' => page('home')->services_section_subtitle()->html(),
    'services_section_content' => page('home')->services_section_content()->markdown()    
)) ?>

<?php snippet('footer') ?>