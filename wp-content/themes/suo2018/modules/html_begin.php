<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> | <?php echo !is_front_page() ? get_the_title() : 'Startseite';?></title>
    <?php
        // Delete Script + Style types because w3c
        ob_start();
        wp_head();
        $buffered_head = ob_get_contents();
        ob_end_clean();
        echo preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $buffered_head);
    ?>
    <style>#fadeOverlay{background-color:#000;z-index:9999;position:fixed;top:0;left:0;width:100%;height:100%;transition:opacity .3s ease-in-out}#fadeOverlay h3{position:absolute;width:100%;text-align:center;padding:0 15px;left:0;top:50%;transform:translateY(-50%);font-size:120%;font-family:font_bold,Helvetica,sans-serif;line-height:1.2;opacity:0}#fadeOverlay h3 .forwardInterupt{display:inline-block}#fadeOverlay.hidden{opacity:0;pointer-events:none}</style>
</head>
<body class="bg-std<?php if(is_front_page())echo' front-page';?>">
<div id="fadeOverlay"></div>