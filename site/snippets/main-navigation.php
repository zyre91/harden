<nav class="navbar harden-navbar">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="harden-logo" href="#">Project name</a>
        <div class="harden-values">
            <ul>
                <li>
                    <div class="icon icon-support"></div>
                    <div class="value">
                        <span class="value-title">
                            Value 1
                        </span>
                        Text text text Text text text Text text text Text text text
                    </div>
                </li>
                <li>
                    <div class="icon icon-logistics"></div>
                    <div class="value">
                        <span class="value-title">
                            Value 2
                        </span>
                        Text text text Text text text Text text text Text text text
                    </div>
                </li>
                <li>
                    <div class="icon icon-phone"></div>
                    <div class="value">
                        <span class="value-title">
                            Value 3
                        </span>
                        Text text text Text text text Text text text Text text text
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="navbar" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav navbar-right">
            <?php foreach ($site->children()->visible() as $vp) : ?>
                <li<?php e($vp->isActive(), ' class="active"') ?>><a href="<?= $vp->url() ?>"><?= $vp->title()->html() ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    </div>
</nav>