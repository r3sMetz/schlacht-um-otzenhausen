<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?bloginfo('name');?> | <?=!is_front_page() ? get_the_title() : 'Startseite';?></title>
    <?
        // Delete Script + Style types because w3c
        ob_start();
        wp_head();
        $buffered_head = ob_get_contents();
        ob_end_clean();
        echo preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $buffered_head);
    ?>
</head>
<body class="bg-std<?if(is_front_page())echo' front-page';?>">
<div id="fadeOverlay"></div>