<div class="row">
    <?php foreach ($services->limit(3) as $service) : ?>
        <div class="col-xs-12 col-sm-4">
            <section class="harden-service-list-item <?= $service->service_icon() ?>">
                <h2><?= $service->service_title()->html() ?></h2>
                <p><?= $service->service_text()->html() ?></p>
            </section>
            
        </div>
    <?php endforeach; ?>
    <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-lg-2 col-lg-offset-5">
        <a class="btn btn-success btn-lg btn-block m-top-40" href="#">
            Jetzt anfragen
        </a>
    </div>
</div>