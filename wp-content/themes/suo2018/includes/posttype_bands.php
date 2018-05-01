<?php
//Function
function add_post_type_band(){
    register_post_type('bands',
        array(
            'labels'=>array(
                'name'=>'Bands',
                'singular_name'=>'Band',
                'add_new'=>'Neue Band hinzufügen',
                'add_new_item'=>'Neue Band hinzufügen',
                'edit_item'=>( 'Band bearbeiten' ),
                'all_items'=>'Alle Bands',


            ),
            'public'=>true,
            'show_ui'=>true,
            'menu_icon'=>'dashicons-groups',

            'supports'=>array(
                'costum_fields',
                'title',
                'editor'
            )
        )
    );
}
//Register
add_action('init','add_post_type_band');
