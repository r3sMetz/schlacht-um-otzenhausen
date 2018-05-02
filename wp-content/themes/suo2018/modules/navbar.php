<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fadeLink" href="<?= home_url(); ?>">Schlacht um Otzenhausen</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-lg-auto">
	            <?foreach(r3_getMenue('Hauptmenu',get_the_ID()) as $item):?>
                    <a class="nav-item nav-link fadeLink<?=$item->active?' active':'';?>" href="<?=$item->url;?>"><?=$item->title;?></a>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</nav>