<main class="container sb-content">
    <!-- Bandlogo -->
    <div class="row mb-5">
        <div class="col-md-12 mx-auto text-center">
            <img src="<?php echo get_field('logo')['url'];?>" class="img-fluid" alt="<?php the_title();?>">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h1 class="mb-0"><?php the_title();?><?php if(strtolower(get_field('land')) !== 'de'):?> <small>( <?php the_field('land');?> )</small><?php endif;?></h1>
            <h2 class="h3 mb-3"><?php the_field('genre');?> | <?php the_field('startzeit');?> Uhr | <?php the_field('buhne');?></h2>
        </div>
    </div>

    <div class="row">
        <?php if(get_the_content() != ''):?>
        <div class="col-sm-7 col-lg-8">
            <?php the_content();?>
        </div>
        <?php endif;?>
        <aside class="col-sm-5 col-lg-4<?php if(get_the_content() != '')echo' text-md-right';?>">
            <ul class="list-unstyled d-inline-block  text-left sb-content-list">
            <?php foreach(get_field('links') as $link):?>
                <li class="mb-2">
                    <a href="<?php echo $link['url'];?>" class="d-inline-block btn btn-secondary w-100" rel="noopener" target="_blank">
                    <i class="fa fa-<?php echo $link['type']['value'];?>"></i>
                    <span>
                    <?php echo $link['type']['value'] == 'globe' ? 'Website von '.notTooLongBandName(get_the_title()) : notTooLongBandName(get_the_title()).' auf '.$link['type']['label'];?>
                    </span>
                    </a>
                </li>
            <?php endforeach;?>
            </ul>
        </aside>
    </div>
    <div class="row">
        <div class="col-12 mt-2 mb-2">
            <a role="button" href="<?php echo get_permalink(10);?>" class="fadeLink btn btn-secondary">Zurück zur Übersicht</a>
        </div>
    </div>
</main>