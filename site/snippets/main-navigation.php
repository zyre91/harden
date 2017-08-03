<nav class="navbar harden-navbar">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Project name</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <?php foreach ($site->children()->visible() as $vp) : ?>
                <li<?php e($vp->isActive(), ' class="active"') ?>><a href="<?= $vp->url() ?>"><?= $vp->title()->html() ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    </div>
</nav>