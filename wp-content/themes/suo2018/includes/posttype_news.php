<?php
//Function
function add_post_type_news(){
    register_post_type('news',
        array(
            'labels'=>array(
                'name'=>'News',
                'singular_name'=>'News',
                'add_new'=>'Neue News hinzufügen',
                'add_new_item'=>'Neue News hinzufügen',
                'edit_item'=>( 'News bearbeiten' ),
                'all_items'=>'Alle News',


            ),
            'public'=>false,
            'show_ui'=>true,
            'menu_icon'=>'dashicons-megaphone',

            'supports'=>array(
                'costum_fields',
                'title',
                'editor'
            )
        )
    );
}
//Register
add_action('init','add_post_type_news');
