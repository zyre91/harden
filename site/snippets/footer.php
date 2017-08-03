  <?php 
          // Saving this for later
          //echo html::decode($site->copyright()->kirbytext())

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