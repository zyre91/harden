<?php 
    $home = page('home');
?>
<?php if (!$page->is($home)) : ?>
<ol class="breadcrumb harden-breadcrumb">
<li><a href="<?= $home->url() ?>"><?= $home->title()->html() ?></a></li>
  <?php if (!$page->is($home)) : ?>
    <?php foreach($page->parents()->flip() as $parent) : ?>
        <li><a href="<?= $parent->url() ?>"><?= $parent->title()->html() ?></a></li>
    <?php endforeach; ?>
    <li class="active"><?= $page->title()->html() ?></li>
  <?php endif; ?>
</ol>
<?php endif; ?>