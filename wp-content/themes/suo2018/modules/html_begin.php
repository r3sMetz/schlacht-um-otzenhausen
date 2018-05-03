<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?bloginfo('name');?> | <?=!is_front_page() ? get_the_title() : 'Startseite';?></title>
    <?wp_head();?>
</head>
<body class="bg-std<?if(is_front_page())echo' front-page';?>">
<div id="fadeOverlay"></div>