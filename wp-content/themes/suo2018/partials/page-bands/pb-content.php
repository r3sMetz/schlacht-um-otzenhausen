<?$bandarray=build_band_array();?>
<div class="container py-4">
    <!-- Headliners -->
    <div class="pb_headliners d-md-flex mx-auto align-items-center justify-content-between flex-wrap">
        <?foreach($bandarray['headliner'] as $band):?>
        <div class="single_band mb-5 mb-md-2">
            <h2 class="d-none"><?=get_the_title($band->ID);?></h2>
            <a href="<?=get_permalink($band->ID);?>" class="fadeLink">
                <img class="img-fluid pb-link" src="<?=get_field('logo',$band->ID)['url'];?>" alt="<?=$band->post_title;?>">
            </a>
        </div>
        <?endforeach;?>
    </div>

    <!-- Normal Bands -->
    <div class="pb_normals d-flex mx-auto align-items-center justify-content-between flex-wrap">
        <?foreach($bandarray['normal'] as $band):?>
        <div class="single_band mb-5 mb-md-2">
            <h3 class="d-none"><?=get_the_title($band->ID);?></h3>
            <a href="<?=get_permalink($band->ID);?>" class="fadeLink">
                <img class="img-fluid pb-link" src="<?=get_field('logo',$band->ID)['url'];?>" alt="<?=$band->post_title;?>">
            </a>
        </div>
        <?endforeach;?>
    </div>
</div>