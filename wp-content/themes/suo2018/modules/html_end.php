<?php
ob_start();
wp_footer();
$buffered_footer = ob_get_contents();
ob_end_clean();
echo preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $buffered_footer);
?>
</body>
</html>