<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?php 

    switch (c::get('env')) {

      case 'production':
        echo css(array(
          'assets/production/main.min.css'
        ));
      break;

      case 'development':
        echo css(array(
          'assets/css/main.css'
        ));
      break;

    }

  ?>

</head>
<body>