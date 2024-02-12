<?php 

	add_action('wp_enqueue_scripts', 'add_my_scripts');

	function add_my_scripts(){
		wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.min.css');

		wp_enqueue_script('main-script', get_template_directory_uri() . './assets/js/app.min.js', 'jquery-core', null, true);
	};


	//acf options

	if(function_exists('acf_add_options_page')) {
		acf_add_options_page(array(
			"page_title" => "Додати загальну інформацію",
			"menu_title" => "Загальні налаштування",
			"menu_slug" => "options",
			"position" => 4
		));
	}

	//taxonomy
	add_action('init', function() {
		$args = [
			'label'  => 'Перемоги',
			'taxonomies' => array('description'),
			'has_archive' => true,
			'public' => true,
			'hierarchical' => true,
			'rewrite' => array('slug' => 'victory'),
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'categories', 'hierarchical' ),
		];

		register_post_type('victory', $args);

		register_taxonomy( 'description', 'victory',array(
			'label' => 'Категории',
			'hierarchical' => true,
			'rewrite' => array(
					'slug' => false,
			),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud' => true,
			'show_in_quick_edit' => true,
			'show_in_rest' => true,
			'meta_box_cb' => null,
			'show_admin_column' => false,
			'description' => '',
			'update_count_callback' => '',
			'query_var' => true
	));
	});
	
	function custom_breadcrumbs() {
		$all_categories = '<li class="breadcrumbs__item breadcrumbs__link">
		' .  single_term_title('', false) . 
		'<span>/</span></li>';

    // Проверяем, не находится ли мы на главной странице
    if ( !is_home() ) {
        echo '<li class="breadcrumbs__item">
					<a href="' . home_url() . '" class="breadcrumbs__link" >Главная <span>/</span></a>
				</li>';

        // Проверяем, находится ли мы на странице категории
        if ( is_category() ) {
            $category = get_queried_object();
            echo single_cat_title('', false) . 4;

        // Проверяем, находится ли мы на странице одного поста
        } elseif ( is_single() ) {
					echo '<li class="breadcrumbs__item breadcrumbs__link">
						' .  get_the_title() . 
					'<span>/</span></li>';

        // Проверяем, находится ли мы на странице архива
        } elseif ( is_archive() ) {
					echo $all_categories;

        // Проверяем, находится ли мы на странице поиска
        } elseif ( is_search() ) {
            echo 'Результаты поиска для "' . get_search_query() . '"';

        // Проверяем, находится ли мы на странице автора
        } elseif ( is_author() ) {
            echo 'Статьи автора "' . get_the_author() . '"';

        // Проверяем, находится ли мы на странице тэгов
        } elseif ( is_tag() ) {
            echo 'Записи с тегом "' . single_tag_title('', false) . '"';

        // Проверяем, находится ли мы на странице страницы
        } elseif ( is_page() ) {
            the_title() . 4;
        }
    }
}
