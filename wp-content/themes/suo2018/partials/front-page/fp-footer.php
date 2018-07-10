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
<span id="privacy_imprint"  class="text-center text-md-left">
    <a class="text-light fadeLink" href="<?=get_permalink(14);?>">Impressum</a>&nbsp;|&nbsp;<a class="text-light fadeLink" href="<?php echo get_permalink(175);?>">Datenschutz</a>
</span>