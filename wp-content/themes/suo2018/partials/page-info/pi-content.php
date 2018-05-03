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
			    <?$last_post = get_last_post();?>
				<h2 class="underlined">News</h2>
				<p><?=date('d.m.Y',strtotime($last_post->post_date));?>:</p>
				<p><?=$last_post->post_content;?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h2 class="underlined"><?the_field('video_1_headline');?></h2>
				<?the_field('video_1');?>
			</div>
			<div class="col-md-6">
				<h2 class="underlined"><?the_field('video2_headline');?></h2>
				<?the_field('video_2');?>
			</div>
		</div>
	</div>
</div>
