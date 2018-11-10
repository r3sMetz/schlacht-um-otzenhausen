<?php $bandarray=build_band_array();?>
<main class="container py-4">
    <!-- Headliners -->
    <div class="pb_headliners d-md-flex mx-auto align-items-center justify-content-between flex-wrap">
        <?php foreach($bandarray['headliner'] as $band):?>
        <article class="single_band mb-5 mb-md-2">
            <h2 class="d-none"><?php echo get_the_title($band->ID);?></h2>
            <a href="<?php echo get_permalink($band->ID);?>" class="fadeLink">
                <img class="img-fluid pb-link" src="<?php echo get_field('logo',$band->ID)['url'];?>" alt="<?php echo $band->post_title;?>">
            </a>
        </article>
        <?php endforeach;?>
    </div>

    <!-- Normal Bands -->
    <div class="pb_normals d-flex mx-auto align-items-center justify-content-center flex-wrap">
        <?php foreach($bandarray['normal'] as $band):?>
        <article class="single_band mb-5 mx-md-2 mx-xl-3 my-md-2">
            <h3 class="d-none"><?php echo get_the_title($band->ID);?></h3>
            <a href="<?php echo get_permalink($band->ID);?>" class="fadeLink">
                <img class="img-fluid pb-link" src="<?php echo get_field('logo',$band->ID)['url'];?>" alt="<?php echo $band->post_title;?>">
            </a>
        </article>
        <?php endforeach;?>
    </div>
</main>