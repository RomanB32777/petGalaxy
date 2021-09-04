<?php

add_action('wp_enqueue_scripts', 'style_theme'); /*Для подключения внешних (твоих) css файлов*/

add_action('wp_enqueue_scripts', 'scripts_theme'); /* Для подключения внешних (твоих) скриптов */

add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status', 'link', 'video')); // Возможность добавлять к посту формат - стандартный пост, заметка, галерея, видео и т.д.

add_theme_support('post-thumbnails', array('post', 'rooms', 'services', 'employees', 'gallerys_foto'));

function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
	wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
}

function style_theme()
{
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    enqueue_versioned_style('style', '/style.css');
	wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style('defaultCarousel', get_template_directory_uri() . '/css/owl.theme.default.min.css');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/fontawesome-free/css/all.min.css');

	//wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.css');
}

function scripts_theme()
{
    wp_enqueue_script('jquery');

	wp_enqueue_script('owlCarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);
	wp_enqueue_script('skroll', get_template_directory_uri() . '/js/skroll.min.js', false, true);
    wp_enqueue_script('myJQuery', get_template_directory_uri() . '/js/jQuery.js', array('jquery'), false, true);
	wp_enqueue_script('index', get_template_directory_uri() . '/js/index.js', array(), false, true);
	wp_register_script('widget', 'https://31752.cloff.ru/widget/hb2.3702.e5a7a52da3a827c37b5a628cc932d191.js');
	wp_enqueue_script('widget');
	
};

add_action('admin_init', 'my_general_section');  
function my_general_section() { 
	add_settings_field( // Option 0
        'info_contacts', // Option ID
        'Краткая информация', // Label
        'my_textarea_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'info_contacts' // Should match Option ID
        )  
    );
	
	add_settings_field( // Option 0
        'site_title', // Option ID
        'Заголовок сайта', // Label
        'my_textarea_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'site_title' // Should match Option ID
        )  
    );
	
    add_settings_section(  
        'my_settings_section', // Section ID 
        'Информация о компании', // Section Title
        'my_section_options_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
        'info_email', // Option ID
        'Почта', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_section', // Name of our section
        array( // The $args
            'info_email' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 2
        'info_phone', // Option ID
        'Телефон', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'info_phone' // Should match Option ID
        )  
    ); 

	add_settings_field( // Option 3
        'info_addr', // Option ID
        'Адрес', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'info_addr' // Should match Option ID
        )  
    );
	
	add_settings_field( // Option 4
        'info_insta', // Option ID
        'Instagram', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'info_insta' // Should match Option ID
        )  
    );
	
	add_settings_field( // Option 5
        'count_of_adv', // Option ID
        'Количество преимуществ с лапками', // Label
        'my_numbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'count_of_adv' // Should match Option ID
        )  
    );
	
	register_setting('general','info_contacts', 'esc_attr');
	register_setting('general','site_title', 'esc_attr');
	register_setting('general','info_email', 'esc_attr');
    register_setting('general','info_phone', 'esc_attr');
    register_setting('general','info_addr', 'esc_attr');
	register_setting('general','info_insta', 'esc_attr');
	register_setting('general','count_of_adv', 'esc_attr');
	
	
	for ($i = 1; $i <= get_option('count_of_adv'); $i++) {
        add_settings_field( // Option 
            'advantage_' . $i, // Option ID
            'Описание преимущества ' . $i, // Label
            'my_textarea_callback', // !important - This is where the args go!
            'general', // Page it will be displayed
            'my_settings_section', // Name of our section (General Settings)
            array( // The $args
                'advantage_' . $i // Should match Option ID
            )  
        );
		register_setting('general','advantage_' . $i, 'esc_attr');
     }
}

function my_section_options_callback() { // Section Callback
    echo '<p>Изменить информацию о компании</p>';  
}

function my_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

function my_numbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="number" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

function my_textarea_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<textarea cols="60" rows="6" type="text" id="'. $args[0] .'" name="'. $args[0] .'"/>'. $option .'</textarea>';
}

add_action('init', 'register_post_types');

function register_post_types()
{
	register_post_type('rooms', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Номера', // основное название для типа записи
			'singular_name'      => 'Номера', // название для одной записи этого типа
			'add_new'            => 'Добавить номер', // для добавления новой записи
			'add_new_item'       => 'Добавление номера', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование номера', // для редактирования типа записи
			'new_item'           => 'Новый номер', // текст новой записи
			'view_item'          => 'Смотреть номер', // для просмотра записи этого типа.
			'search_items'       => 'Искать номер', // для поиска по этим типам записи
			'not_found'          => 'Номер не найден', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Номер не найден в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Номера', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public, то есть исключить из поиска при true!!!
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-awards', 
		'hierarchical'        => false,
		'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	));

	register_post_type('services', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Услуги',
			'singular_name'      => 'Услуги',
			'add_new'            => 'Добавить услугу',
			'add_new_item'       => 'Добавление услуги',
			'edit_item'          => 'Редактирование услуги',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Смотреть услугу',
			'search_items'       => 'Искать услугу',
			'not_found'          => 'Услуга не найдена',
			'not_found_in_trash' => 'Услуга не найдена в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Услуги',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-media-text',
		'hierarchical'        => false,
		'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	));
	
	register_post_type('reserved', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Бронирование', // основное название для типа записи
			'singular_name'      => 'Заголовок', // название для одной записи этого типа
			'add_new'            => 'Добавить заголовок', // для добавления новой записи
			'add_new_item'       => 'Добавление заголовка', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование заголовка', // для редактирования типа записи
			'new_item'           => 'Новый заголовок', // текст новой записи
			'view_item'          => 'Смотреть заголовок', // для просмотра записи этого типа.
			'search_items'       => 'Искать заголовок', // для поиска по этим типам записи
			'not_found'          => 'Заголовок не найден', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Заголовок не найден в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Бронирование', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public, то есть исключить из поиска при true!!!
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-awards', 
		'hierarchical'        => false,
		'supports'            => array('title', 'editor', 'excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	));


	register_post_type('employees', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Сотрудники',
			'singular_name'      => 'Сотрудники',
			'add_new'            => 'Добавить человека',
			'add_new_item'       => 'Добавление человека',
			'edit_item'          => 'Редактирование человека',
			'new_item'           => 'Новый человек',
			'view_item'          => 'Смотреть человека',
			'search_items'       => 'Искать человека',
			'not_found'          => 'Человек не найден',
			'not_found_in_trash' => 'Человек не найден в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Сотрудники',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-id',
		'hierarchical'        => false,
		'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	));



    register_post_type('gallerys_foto', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Галерея',
            'singular_name'      => 'Галерея',
            'add_new'            => 'Добавить фото',
            'add_new_item'       => 'Добавление фото',
            'edit_item'          => 'Редактирование фото',
            'new_item'           => 'Новое фото',
            'view_item'          => 'Смотреть фото',
            'search_items'       => 'Искать фото',
            'not_found'          => 'Фото не найдено',
            'not_found_in_trash' => 'Фото не найдено в корзине',
            'parent_item_colon'  => '',
            'menu_name'          => 'Галерея фото',
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'rest_base'           => null,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-id',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ));

}

add_action('init', 'create_taxonomy');
add_action('init', 'create_gallery');


function create_gallery()
{
    // список параметров: http://wp-kama.ru/function/get_taxonomy_labels
    register_taxonomy('type_gallery', array('gallerys_foto'), array(
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Тип галереи',
            'singular_name'     => 'Тип',
            'search_items'      => 'Найти тип',
            'all_items'         => 'Все типы',
            'view_item '        => 'Смотреть тип',
            'parent_item'       => 'Родительский тип',
            'parent_item_colon' => 'Родительский тип:',
            'edit_item'         => 'Изменить тип',
            'update_item'       => 'Обновить тип',
            'add_new_item'      => 'Добавить новый тип',
            'new_item_name'     => 'Новое имя типа',
            'menu_name'         => 'Типы галерей',
        ),
        'description'           => 'Тип галереи', // описание таксономии
        'public'                => true,
        'publicly_queryable'    => null, // равен аргументу public
        'hierarchical'          => false, // Есть ли у этой таксономии дочерник ветки (таксономии)
        //'update_count_callback' => '_update_post_term_count',
        'rewrite'               => true,
    ));
}


function create_taxonomy()
{
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('type_room', array('rooms'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Тип номера',
			'singular_name'     => 'Тип',
			'search_items'      => 'Найти тип',
			'all_items'         => 'Все типы',
			'view_item '        => 'Смотреть тип',
			'parent_item'       => 'Родительский тип',
			'parent_item_colon' => 'Родительский тип:',
			'edit_item'         => 'Изменить тип',
			'update_item'       => 'Обновить тип',
			'add_new_item'      => 'Добавить новый тип',
			'new_item_name'     => 'Новое имя типа',
			'menu_name'         => 'Типы номеров',
		),
		'description'           => 'Тип номера', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'hierarchical'          => false, // Есть ли у этой таксономии дочерник ветки (таксономии)
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
	));
}


if ( !function_exists('fb_AddThumbColumn') && function_exists('add_theme_support') ) {

    // for post and page
    add_theme_support('post-thumbnails', array( 'post', 'page' ) );

    function fb_AddThumbColumn($cols) {

        $cols['thumbnail'] = __('Thumbnail');

        return $cols;
    }

    function fb_AddThumbValue($column_name, $post_id) {

        $width = (int) 35;
        $height = (int) 35;

        if ( 'thumbnail' == $column_name ) {
            // thumbnail of WP 2.9
            $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
            // image from gallery
            $attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
            if ($thumbnail_id)
                $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
            elseif ($attachments) {
                foreach ( $attachments as $attachment_id => $attachment ) {
                    $thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
                }
            }
            if ( isset($thumb) && $thumb ) {
                echo $thumb;
            } else {
                echo __('None');
            }
        }
    }

    // for posts
    add_filter( 'manage_posts_columns', 'fb_AddThumbColumn' );
    add_action( 'manage_posts_custom_column', 'fb_AddThumbValue', 10, 2 );

    // for pages
    add_filter( 'manage_pages_columns', 'fb_AddThumbColumn' );
    add_action( 'manage_pages_custom_column', 'fb_AddThumbValue', 10, 2 );
}

add_filter('manage_posts_columns', 'scompt_custom_columns');
function scompt_custom_columns($defaults) {
    unset($defaults['comments']);
    unset($defaults['author']);
    return $defaults;
}
?>