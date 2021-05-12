<?php
/**
 * wp-imob functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-imob
 */

if ( ! function_exists( 'imobiliariafacil_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function imobiliariafacil_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wp-imob, use a find and replace
		 * to change 'imobiliariafacil' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'imobiliariafacil', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/* Disable the Gutenberg editor. */
		add_filter('use_block_editor_for_post', '__return_false');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'imobiliariafacil' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'imobiliariafacil_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 150,
			'width'       => 250,
			'flex-width'  => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'imobiliariafacil_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function imobiliariafacil_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'imobiliariafacil_content_width', 640 );
}
add_action( 'after_setup_theme', 'imobiliariafacil_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function imobiliariafacil_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'imobiliariafacil' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'imobiliariafacil' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'imobiliariafacil_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function imobiliariafacil_scripts() {
	wp_enqueue_style( 'imobiliariafacil-style', get_stylesheet_uri() );

	wp_enqueue_script( 'imobiliariafacil-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'imobiliariafacil-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'imobiliariafacil_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



/**
 * Materialize CSS.
 */
function add_estilos_e_scripts() {
	wp_enqueue_style( 'materializecss', get_template_directory_uri() . '/materialize/materialize.min.css');}
 add_action( 'wp_enqueue_scripts', 'add_estilos_e_scripts' );




 /**
 * Materialize JS.
 */
function add_js_scripts() {
	wp_enqueue_script( 'script', get_template_directory_uri() . '/materialize/materialize.min.js', array ( 'jquery' ), 1.1, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_js_scripts' );



  /**
 * Tamanho dos thumbnails.
 */

  function wpimob_thumbnail() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 330, 220, true );
}
add_action( 'after_setup_theme', 'wpimob_thumbnail' );


  /**
 * Remove menus não necessários.
 */


function remove_menus() {
	remove_menu_page( 'edit.php' );        //Post
	remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );





 /**
 * Cria menu customizado para postagem de imóveis.
 */


function custom_post_imoveis() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Imóveis' ),
    'singular_name'      => __( 'Imóveis' ),
    'add_new'            => __( 'Adicionar novo imóvel' ),
    'add_new_item'       => __( 'Adicionar novo imóvel' ),
    'edit_item'          => __( 'Editar imóvel' ),
    'new_item'           => __( 'Novo imóvel' ),
    'all_items'          => __( 'Todos imóveis' ),
    'view_item'          => __( 'Visualizar imóvel' ),
    'search_items'       => __( 'Pesquisar imóveis' ),
    'featured_image'     => 'Imagem destacada',
    'set_featured_image' => 'Adicionar imagem'
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our movies and movie specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array ('title', 'custom-fields', 'thumbnail'),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'query_var'         => 'imovel'
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // Parameter 2 is the $args array
  register_post_type( 'imovel', $args);
}
 
// Hook <strong>lc_custom_post_movie_reviews()</strong> to the init action hook
add_action( 'init', 'custom_post_imoveis' );



/**
 * Cria o filtro customizado do menu de cadastro de imóveis admin do wp.
 */

add_filter( 'manage_imovel_posts_columns', 'set_custom_edit_imovel_columns' );
function set_custom_edit_imovel_columns($columns) {
		unset( $columns['imovel'] );
		$columns['tipo_de_imovel'] = __( 'Tipo de imóvel' );
    $columns['preco'] = __( 'Preço' );
		$columns['codigo_do_imovel'] = __( 'Código' );
		

    return $columns;
}


// Adiciona os dados no filtro customizado no admin do wp:
	add_action( 'manage_imovel_posts_custom_column' , 'custom_imovel_column', 10, 2 );
	function custom_imovel_column( $column, $post_id ) {
			switch ( $column ) {
	
					case 'codigo_do_imovel' :
						echo get_post_meta( $post_id , 'codigo_do_imovel' , true );
						break;
	
					case 'preco' :
							echo get_post_meta( $post_id , 'preco' , true ); 
							break;
					
					case 'tipo_de_imovel' :
						echo get_post_meta( $post_id , 'tipo_de_imovel' , true );
						break;
	
			}
	}


// Torna os dados selecionados sorteaveis na tabela do admin do wp:
add_filter( 'manage_edit-imovel_sortable_columns', 'my_sortable_imovel_column' );
function my_sortable_imovel_column( $columns ) {
		$columns['preco'] = 'preco';
		$columns['tipo_de_imovel'] = 'tipo_de_imovel';
 
    //To make a column 'un-sortable' remove it from the array
    //unset($columns['date']);
 
    return $columns;
}


//ajusta tamanhoa da imagem dos imoveis
add_image_size( 'imovel_thumb', 640, 360, true);