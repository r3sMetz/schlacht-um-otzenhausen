<footer class="text-center fp-footer">
	<h3 class="d-none"><?php echo get_event_date();?></h3>
	<div class="tlt display-huge text-secondary font-heat">
        <ul class="tlt-texts list-unstyled d-none">
            <li><?php echo get_event_date();?></li>
            <?php foreach(get_field('werbeclaims','option') as $claim):?>
                <li><?php echo $claim['claim'];?></li>
            <?php endforeach;?>
        </ul>
    </div>
</footer>

<!-- Privacy + Imprint -->
<nav id="privacy_imprint" class="text-center text-md-left position-fixed suo_footer_btm">
    <a class="text-light fadeLink" href="<?php echo get_permalink(14);?>">Impressum</a>&nbsp;|&nbsp;<a class="text-light fadeLink" href="<?php echo get_permalink(175);?>">Datenschutz</a>
</nav>

<!-- metal.de -->
<a href="https://www.metal.de/" target="_blank" id="metalde" class="position-fixed suo_footer_btm">
    <img src="<?php echo get_theme_file_uri('assets/img/metalde.png');?>" alt="metal.de">
</a>
