  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

      <p class="footer-madewithkirby">
        <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b class="heart">♥</b></a>
      </p>
    
    </div>
  </footer>

  <?php 

    switch (c::get('env')) {

      case 'production':
        echo js(array(
          'assets/production/all.min.js'
        ));
      break;

      case 'development':
        echo js(array(
          'bower_components/jquery/dist/jquery.js',
          'bower_components/bootstrap/dist/js/bootstrap.js',
          'assets/js/main.js'
        ));
      break;

    }

  ?>
</body>
</html>