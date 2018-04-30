<section class="fp-content d-flex flex-wrap text-center mx-auto">
    <?php foreach(r3_getMenue('Hauptmenu',get_the_ID()) as $item):?>
    <?php $item_options = build_item_options($item);?>
	<div class="fp-content-square d-flex align-items-center justify-content-center<?=$item_options['off'];?>" data-link="bands">
		<div class="square_inner<?=$item_options['muted'];?>">
		    <i class="<?=$item_options['icon'];?> display-4 d-inline-block mb-1"></i>
            <h2><?=$item_options['headline'];?></h2>
		</div>
	</div>
	<?php endforeach;?>
</section>