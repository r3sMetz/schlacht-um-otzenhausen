<main>
	<div class="container">
		<div class="row mb-3">
		    <!-- FAQ -->
			<section class="col-md-6">
				<h2 class="underlined">FAQ</h2>
				<?php while(have_rows('faq')):the_row();?>
				    <div class="faq_question mb-4">
                        <h3 class="h4 mb-0"><?php the_sub_field('frage');?></h3>
                        <?php the_sub_field('antwort');?>
                    </div>
				<?php endwhile;?>
			</section>
            <!-- Posts -->
			<div class="col-md-6">
                <div class="row">
                    <article class="col-12">
						<?php $last_post = get_last_news(); ?>
                        <header><h2 class="underlined">News</h2></header>
                        <div class="mb-0 text-muted"><?php echo date( 'd.m.Y', strtotime( $last_post->post_date ) ); ?>:</div>
						<?php echo wpautop( $last_post->post_content ); ?>
                    </article>
                </div>
                <!-- Downloads -->
                <?php if(have_rows('downloads_bearbeiten')):?>
                    <div class="row">
                        <section class="col-12">
                            <h2 class="underlined">Downloads</h2>
                            <?php foreach(get_field('downloads_bearbeiten') as $download):?>
                                <a href="<?php echo $download['download'];?>" class="btn btn-secondary btn-lg mb-1" target="_blank">
                                    <i class="fa fa-download"></i> <?php echo $download['name'];?>
                                </a>
                            <?php endforeach;?>
                            <?php if(file_exists(get_template_directory().'/assets/pdf/suo_running_order.pdf')):?>
                                <a href="<?php echo get_template_directory_uri().'/assets/pdf/suo_running_order.pdf';?>" class="btn btn-secondary btn-lg mb-1" target="_blank">
                                    <i class="fa fa-download"></i> Running Order
                                </a>
                            <?php endif;?>
                        </section>
                    </div>
                <?php endif;?>
			</div>
		</div>
		<!-- Videos -->
		<div class="row">
			<article class="col-md-6">
				<header><h2 class="underlined"><?php the_field('video_1_headline');?></h2></header>
				<?php echo clean_iframe(get_field('video_1'));?>
			</article>
			<article class="col-md-6">
				<header><h2 class="underlined"><?php the_field('video2_headline');?></h2></header>
				<?php echo clean_iframe(get_field('video_2'));?>
			</article>
		</div>
	</div>
</main>
