<?php
//HTML Begin
get_template_part('modules/html_begin');

// Navbar Module
get_template_part('modules/navbar');

// Page Content
?>
<div class="container">
<?php
while(have_posts()){
	the_post();
	the_content();
}
?>
</div>

<?php
// Footer
get_template_part('modules/footer');


//HTML End
get_template_part('modules/html_end');

