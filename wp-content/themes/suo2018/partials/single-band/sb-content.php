<main class="container sb-content">
    <!-- Bandlogo -->
    <div class="row mb-5">
        <div class="col-md-12 mx-auto text-center">
            <img src="<?=get_field('logo')['url'];?>" class="img-fluid" alt="<?the_title();?>">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h1 class="mb-0"><?the_title();?><?if(strtolower(get_field('land')) !== 'de'):?> <small>( <?the_field('land');?> )</small><?endif;?></h1>
            <h2 class="h3 mb-3"><?the_field('genre');?> | <?the_field('startzeit');?> Uhr | <?the_field('buhne');?></h2>
        </div>
    </div>

    <div class="row">
        <?if(get_the_content() != ''):?>
        <div class="col-sm-7 col-lg-8">
            <?the_content();?>
        </div>
        <?endif;?>
        <aside class="col-sm-5 col-lg-4<?if(get_the_content() != '')echo' text-md-right';?>">
            <ul class="list-unstyled d-inline-block  text-left sb-content-list">
            <?foreach(get_field('links') as $link):?>
                <li class="mb-2">
                    <a href="<?=$link['url'];?>" class="d-inline-block btn btn-secondary btn-lg w-100" target="_blank">
                    <i class="fa fa-<?=$link['type']['value'];?>"></i>
                    <span>
                    <?=$link['type']['value'] == 'globe' ? 'Website von '.notTooLongBandName(get_the_title()) : notTooLongBandName(get_the_title()).' auf '.$link['type']['label'];?>
                    </span>
                    </a>
                </li>
            <?php endforeach;?>
            </ul>
        </aside>
    </div>
    <div class="row">
        <div class="col-12 mt-2 mb-2">
            <a role="button" href="<?=get_permalink(10);?>" class="fadeLink btn btn-secondary">Zurück zur Übersicht</a>
        </div>
    </div>
</main>