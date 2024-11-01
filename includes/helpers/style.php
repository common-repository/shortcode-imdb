<?php
// Admin CSS style path
function shimdb_imdb_admin_styles(){

    wp_enqueue_style(
        'shimdb-admin-sans-css',
        SHIMDB_URL.'includes/css/google-font.css?v='.SHIMDB_VS,
        array(),
        time()
    );

    wp_enqueue_style(
        'shimdb-admin-awesome-css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        array(),
        time()
    );


    wp_enqueue_style(
        'shimdb-admin-css',
        SHIMDB_URL.'includes/css/admin-style.css?v='.SHIMDB_VS,
        array(),
        time()
    );
}


// Frontend CSS style path
function shimdb_imdb_frontend_styles(){

    wp_enqueue_style(
        'shimdb-frontend-css',
        SHIMDB_URL.'includes/css/style.css?v='.SHIMDB_VS,
        time()
    );


	wp_enqueue_style('shnow-font-awesome',
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
		time()
	);

}

