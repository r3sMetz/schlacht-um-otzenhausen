<footer class="text-center fp-footer">
	<h3 class="d-none"><?=get_event_date();?></h3>
	<div class="tlt display-huge text-secondary font-heat">
        <ul class="tlt-texts list-unstyled d-none">
            <li><?=get_event_date();?></li>
            <?foreach(get_field('werbeclaims','option') as $claim):?>
                <li><?=$claim['claim'];?></li>
            <?endforeach;?>
        </ul>
    </div>
</footer>

<!-- Privacy + Imprint -->
<span id="privacy_imprint"  class="text-center text-md-left position-fixed suo_footer_btm">
    <a class="text-light fadeLink" href="<?=get_permalink(14);?>">Impressum</a>&nbsp;|&nbsp;<a class="text-light fadeLink" href="<?php echo get_permalink(175);?>">Datenschutz</a>
</span>

<!-- metal.de -->
<a href="https://www.metal.de/" target="_blank" id="metalde" class="position-fixed suo_footer_btm text-center">
    <img src="<?php echo get_theme_file_uri('assets/img/metalde.png');?>" alt="metal.de">
</a>
