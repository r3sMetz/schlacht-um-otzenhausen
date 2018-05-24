<div class="section">
	<div class="container">
		<div class="row mb-3">
			<div class="col-md-6">
				<h2 class="underlined">FAQ</h2>
				<?while(have_rows('faq')):the_row();?>
				    <div class="faq_question mb-4">
                        <h3 class="h4 mb-0"><?the_sub_field('frage');?></h3>
                        <?the_sub_field('antwort');?>
                    </div>
				<?endwhile;?>
			</div>
			<div class="col-md-6">
                <div class="row">
                    <div class="col-12">
						<? $last_post = get_last_post(); ?>
                        <h2 class="underlined">News</h2>
                        <p class="mb-0 text-muted"><?= date( 'd.m.Y', strtotime( $last_post->post_date ) ); ?>:</p>
						<?= wpautop( $last_post->post_content ); ?>
                    </div>
                </div>
                <?if(have_rows('downloads_bearbeiten')):?>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="underlined">Downloads</h2>
                            <?php foreach(get_field('downloads_bearbeiten') as $download):?>
                                <a href="<?=$download['download'];?>" class="btn btn-secondary btn-lg mb-1" target="_blank">
                                    <i class="fa fa-download"></i> <?=$download['name'];?>
                                </a>
                            <?php endforeach;?>
                        </div>
                    </div>
                <?php endif;?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h2 class="underlined"><?the_field('video_1_headline');?></h2>
				<?=clean_iframe(get_field('video_1'));?>
			</div>
			<div class="col-md-6">
				<h2 class="underlined"><?the_field('video2_headline');?></h2>
				<?=clean_iframe(get_field('video_2'));?>
			</div>
		</div>
	</div>
</div>
