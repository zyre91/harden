<section class="harden-section">

    <div class="container">
    
        <div class="row text-center m-bottom-60">
        
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <h1 class="harden-section-page-title">
                    Aktuelles
                </h1>

                <h2 class="harden-section-title">
                    <?= $title ?>
                </h2>

                <p class="harden-section-subtitle">
                    <?= $subtitle ?>
                </p>
            </div>
        
        </div>

        <div class="row">

            <?php foreach($news_articles as $news_article) : ?>
                <div class="col-xs-12 col-sm-3">
                    <?= $news_article->title()->html() ?>
                </div>
            <?php endforeach; ?>

        </div>
    
    </div>

</section>