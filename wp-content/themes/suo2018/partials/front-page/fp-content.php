<section class="fp-content d-flex flex-wrap text-center mx-auto">
	<div class="fp-content-square d-flex align-items-center justify-content-center <?if(!get_field('bands_aktivieren','options'))echo ' off';?>" data-link="bands">
		<div class="square_inner<?if(!get_field('tickets_aktivieren','options'))echo ' text-muted';?>">
		    <i class="flaticon bands display-4 d-inline-block mb-1"></i>
			<?if(get_field('bands_aktivieren','options')):?>
			    <h2>Bands</h2>
            <?else:?>
                <h2>Bands <small>( <?the_field('band-nachricht','option');?> )</small></h2>
            <?endif;?>
		</div>
	</div>
	<div class="fp-content-square d-flex align-items-center justify-content-center" data-link="info">
		<div class="square_inner">
		    <i class="fa fa-info-circle display-4 d-inline-block mb-1"></i>
			<h2>Info</h2>
		</div>
	</div>
	<div class="fp-content-square d-flex align-items-center justify-content-center<?if(!get_field('tickets_aktivieren','options'))echo ' off';?>" data-link="tickets">
		<div class="square_inner<?if(!get_field('tickets_aktivieren','options'))echo ' text-muted';?>">
		    <i class="fa fa-ticket display-4 d-inline-block mb-1"></i>
			<?if(get_field('tickets_aktivieren','options')):?>
			    <h2>Tickets</h2>
            <?else:?>
                <h2>Tickets <small>( <?the_field('ticket-nachricht','option');?> )</small></h2>
            <?endif;?>
		</div>
	</div>
	<div class="fp-content-square d-flex align-items-center justify-content-center" data-link="anfahrt">
		<div class="square_inner">
		    <i class="flaticon anfahrt display-4 d-inline-block mb-1"></i>
			<h2>Anfahrt</h2>
		</div>
	</div>
</section>