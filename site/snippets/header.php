<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="<?= $site->description()->html() ?>">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

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



<div class="harden-header">

  <?php snippet('main-navigation') ?>

</div>

<div class="container">
<?php snippet('breadcrumb', array('page' => $page)); ?>
</div>
<?php snippet('page-header-image', array('page' => $page)); ?>
