<?php snippet('header') ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
            <section class="harden-section p-0">
                <?php snippet('page-header', array(
                    'page_title' => 'Das Unternehmen',
                    'page_intro_title' => $page->page_header_title()->html(),
                    'page_intro_text' => $page->page_header_subtitle()->html()
                )) ?>
            </section>
        </div>
    </div>
    <div class="row">
        <?php foreach($page->staff_members()->toStructure() as $staff_member): ?>
        <div class="col-xs-12 col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/400x200" alt="">
            <h3 class="h4"><?= $staff_member->member_name()->html() ?></h3>
            <p><?= $staff_member->member_position()->html() ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php snippet('footer') ?>