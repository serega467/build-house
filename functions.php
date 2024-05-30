<?php
// правильный способ подключить стили и скрипты
// build-house - название темы
add_action( 'wp_enqueue_scripts', 'build_style' );
// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts', 'build_scripts' );

function build_style() {
	
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );

	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

}

//  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

function build_scripts() {

	wp_deregister_script( 'jquery' );
	// wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.js' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	// подключаем js файл темы
	// wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(jquery), null, true );
	
	// ----------------------------------------------------------------------------------------------------------------------------------------
	// моя цель, задать логику первичной загрузки jquery, а потом уже -- magnific-popup.min.js -- запись актуальна в 2024 году или нет?
	wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), true );

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
}


