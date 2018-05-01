<?$bandarray=build_band_array();?>
<div class="container py-4">
    <!-- Headliners -->
    <div class="pb_headliners d-md-flex mx-auto align-items-center justify-content-between flex-wrap">
        <?php foreach($bandarray['headliner'] as $band):?>
        <div class="single_band mb-5 mb-md-2">
            <img class="img-fluid" src="<?=get_field('logo',$band->ID)['url'];?>" alt="Title">
        </div>
        <?php endforeach;?>
    </div>
    <!-- Normal Bands -->
    <div class="pb_normals d-flex mx-auto align-items-center justify-content-between flex-wrap">
        <?php foreach($bandarray['normal'] as $band):?>
        <div class="single_band mb-5 mb-md-2">
            <img class="img-fluid" src="<?=get_field('logo',$band->ID)['url'];?>" alt="Title">
        </div>
        <?php endforeach;?>
    </div>
</div>