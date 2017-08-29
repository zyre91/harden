<li class="product-tab-list-item">
    <div class="row">
        <img class="col-xs-12 col-sm-3 col-md-2" src="http://placehold.it/200x200" alt="">
        <div class="col-xs-12 col-sm-6 col-md-7">
            <h2><?= $mix->mix_title()->html() ?></h2>
            <p><?= $mix->mix_description()->html() ?></p>
            <a href="#"><?= l::get('BUTTON.READ_MORE') ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <button class="btn btn-success btn-lg btn-block">
                <?= l::get('BUTTON.REQUEST_NOW') ?>
            </button>
        </div>
    </div>
</li>