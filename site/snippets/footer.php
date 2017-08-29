  <footer class="harden-footer">

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <span class="harden-footer-brand-name">
            Harden
          </span>
          <span class="harden-footer-brand-claim">
            Guter Boden ist machbar
          </span>
          <address>
            Heinrich Harden GmbH<br>
            Norderquerweg 89<br>
            21037 Hamburg<br>
            Telefon: 040 / 7 23 30 01<br>
            Telefon: 040 / 7 23 15 30
          </address>
        </div>
        <div class="col-xs-12 col-sm-3">
          <ul class="footer-navigation">
            <?php foreach($site->children()->visible()->limit(5) as $fp) : ?>
            <li<?php e($fp->isActive(), ' class="active"') ?>><a href="<?= $fp->url() ?>"><?= $fp->title()->html() ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <ul class="footer-navigation">
            <li><a href="<?= page('kontakt')->url() ?>"><?= page('kontakt')->title()->html() ?></a></li>
            <li><a href="<?= page('impressum')->url() ?>"><?= page('impressum')->title()->html() ?></a></li>
            <li><a href="<?= page('datenschutz')->url() ?>"><?= page('datenschutz')->title()->html() ?></a></li>
            <li><a href="<?= page('agb')->url() ?>"><?= page('agb')->title()->html() ?></a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="harden-newsletter-wrapper">
              <span class="harden-newsletter-title">Newsletter</span>
              <span class="harden-newsletter-text">Wir informieren Sie über Produktneuheiten und Angeboten.<br> Jetzt abbonieren.</span>
              <div class="input-group input-group-lg m-top-10">
                <input type="text" class="form-control" placeholder="Ihre E-Mail-Adresse" aria-describedby="sizing-addon1">
                <span class="input-group-btn" id="sizing-addon1">
                  <button class="btn btn-success">
                    <i class="glyphicon glyphicon-send"></i>
                  </button>
                </span>
              </div> 
            </div>
        </div>
      </div>
    </div>
    
    <div class="copyright-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <?php echo $site->copyright()->kirbytext() ?>
          </div>
          <div class="col-xs-12 col-sm-6">
            <span class="pull-right">made with <span class="glyphicon glyphicon-heart"></span> by <a href="http://peterfriend.de" target="_blank" title="Peter Friend - web developer in Berlin">Peter Friend</a></span>
          </div>
        </div>
      </div>
    </div>

  </footer>
  
  <?php 
          // Saving this for later
          //echo html::decode($site->copyright()->kirbytext())

    switch (c::get('env')) {

      case 'production':
        echo js(array(
          '///maps.googleapis.com/maps/api/js?key='.$site->google_maps_api_key(),
          'assets/production/all.min.js'
        ));
      break;

      case 'development':
        echo js(array(
          '///maps.googleapis.com/maps/api/js?key='.$site->google_maps_api_key(),          
          'bower_components/jquery/dist/jquery.js',
          'bower_components/bootstrap/dist/js/bootstrap.js',
          'bower_components/slick-carousel/slick/slick.min.js',
          'assets/js/main.js'
        ));
      break;

    }

  ?>
</body>
</html>