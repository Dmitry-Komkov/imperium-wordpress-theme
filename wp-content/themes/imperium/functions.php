<?php
/**
 * imperiumchekhov functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package imperiumchekhov
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function imperium_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on imperiumchekhov, use a find and replace
		* to change 'imperium' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'imperium', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'imperium' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'imperium_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'imperium_setup' );

add_filter( 'show_admin_bar', '__return_false' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function imperium_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'imperium_content_width', 640 );
}
add_action( 'after_setup_theme', 'imperium_content_width', 0 );

add_filter( 'shortcode_atts_wpcf7', 'imperium_shortcode_atts_wpcf7_filter', 10, 3 );
 
function imperium_shortcode_atts_wpcf7_filter( $out, $pairs, $atts ) {
  $my_attr = 'group-page';
 
  if ( isset( $atts[$my_attr] ) ) {
    $out[$my_attr] = $atts[$my_attr];
  }
 
  return $out;
}

/**
 * Add custom classes to menu links and items
 */

function imperium_nav_menu_css_class_filter( $classes ){
	array_push( $classes, 'menu__item', 'nav-item');
	
	return $classes;
}
add_filter( 'nav_menu_css_class', 'imperium_nav_menu_css_class_filter', 10, 1 );

function imperium_change_nav_menu_link_attributes( $atts ) {
	$atts['class'] = 'menu__link nav-link';

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'imperium_change_nav_menu_link_attributes', 10, 1 );

/**
 * Remove Stamps from post archive title
 */
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function imperium_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'imperium' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'imperium' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__( 'Contacts', 'imperium' ),
			'id' => 'footer-contacts',
			'description' => esc_html__( 'Добавьте данные виджета'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_sidebar' => '<div id="widget-%1$s" class="widget %2$s">',
			'after_sidebar' => '</div>',
			'class' => 'contacts',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__( 'Promo', 'imperium' ),
			'id' => 'promo-banner',
			'description' => esc_html__( 'Добавьте данные виджета'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_sidebar' => '<div id="widget-%1$s" class="widget %2$s">',
			'after_sidebar' => '</div>',
			'class' => 'contacts',
		)
	);
}
add_action( 'widgets_init', 'imperium_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function imperium_scripts() {

	$post_type = get_post_type();

	if ( is_front_page() || is_home() ) {
		wp_enqueue_style( 'imperium-style', get_template_directory_uri() . '/dist/css/main.css', array(), _S_VERSION );
		wp_style_add_data( 'imperium-style', 'rtl', 'replace' );
	
		wp_enqueue_script( 'imperium-scripts', get_template_directory_uri() . '/dist/js/bundle.js', array(), _S_VERSION, true );
	}

	if ( is_page_template('pages/imperium-cup.php') ) {
		wp_enqueue_style( 'imperium-style-cup', get_template_directory_uri() . '/dist/css/cup.css', array(), _S_VERSION );
		wp_style_add_data( 'imperium-style', 'rtl', 'replace' );
	
		wp_enqueue_script( 'imperium-scripts-cup', get_template_directory_uri() . '/dist/js/cup.js', array(), _S_VERSION, true );
	}

	if ( $post_type == 'groups' ) {
		wp_enqueue_style( 'imperium-style-groups', get_template_directory_uri() . '/dist/css/groups.css', array(), _S_VERSION );
		wp_style_add_data( 'imperium-style-groups', 'rtl', 'replace' );
	
		wp_enqueue_script( 'imperium-scripts-groups', get_template_directory_uri() . '/dist/js/groups.js', array(), _S_VERSION, true );
	}

}
add_action( 'wp_enqueue_scripts', 'imperium_scripts' );

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
 * Implement Custome Image Sizes
 */
require get_template_directory() . '/inc/custom-image-sizes.php';

/**
 * Send Data to Yandex Metrica
 */
function ya_goals_forms()
{
?>
	<script>
		document.addEventListener('wpcf7mailsent', function(event) {
			ym(66399592, 'reachGoal', 'success_form');
		}, true);
	</script>
<?php
}
add_action('wp_enqueue_scripts', 'ya_goals_forms');

/**
 * Send Data to CRM
 */

<<<<<<< HEAD
// function your_wpcf7_mail_sent_function($contact_form)
// {
// 	// Перехватываем данные из Contact Form 7
// 	$title = $contact_form->title;
// 	$posted_data = $contact_form->posted_data;
// 	$submission = WPCF7_Submission::get_instance();
// 	$posted_data = $submission->get_posted_data();
// 	// Далее перехватываем введенные данные в полях Contact Form 7:
// 	// 1. Перехватываем поле [your-name]
// 	$firstName = $posted_data['client-name'];
// 	// 2. Перехватываем поле [your-phone]
// 	$phone = $posted_data['client-phone'];
// 	// 3. Перехватываем поле [your-mail]
// 	$client_email = $posted_data['client-email'];

// 	$link = 'https://cloud.1c.fitness/api/hs/lead/Webhook/77f2a3a5-d873-4ece-bb0d-356a9b517566';
// 	$curl = curl_init($link);

// 	$data = [
// 		'name' => $firstName ? $firstName : 'Заявка с сайта ' . ($phone ? $phone : ''), // имя
// 		'phone' => $phone, // телефон
// 		'email' => $client_email, // email
// 	];

// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// 	curl_setopt($curl, CURLOPT_POST, true);
// 	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
// 	curl_setopt($curl, CURLOPT_HEADER, false);

// 	$out = curl_exec($curl);
// 	$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
// 	curl_close($curl);
// }
// add_action('wpcf7_mail_sent', 'your_wpcf7_mail_sent_function');
=======
function your_wpcf7_mail_sent_function($contact_form)
{
	// Перехватываем данные из Contact Form 7
	$title = $contact_form->title;
	$posted_data = $contact_form->posted_data;
	$submission = WPCF7_Submission::get_instance();
	$posted_data = $submission->get_posted_data();
	// Далее перехватываем введенные данные в полях Contact Form 7:
	// 1. Перехватываем поле [your-name]
	$firstName = $posted_data['client-name'];
	// 2. Перехватываем поле [your-phone]
	$phone = $posted_data['client-phone'];
	// 3. Перехватываем поле [your-mail]
	$client_email = $posted_data['client-email'];

	$link = 'https://cloud.1c.fitness/api/hs/lead/Webhook/77f2a3a5-d873-4ece-bb0d-356a9b517566';
	$curl = curl_init($link);

	$data = [
		'name' => $firstName ? $firstName : 'Заявка с сайта ' . ($phone ? $phone : ''), // имя
		'phone' => $phone, // телефон
		'email' => $client_email, // email
	];

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($curl, CURLOPT_HEADER, false);

	$out = curl_exec($curl);
	$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);
}
add_action('wpcf7_mail_sent', 'your_wpcf7_mail_sent_function');
>>>>>>> update

/**
 * Helper Functions
 */

function load_inline_svg( $filename ) {
	$svg_path = '/assets/images/svgs/';

	if ( file_exists( get_stylesheet_directory() . $svg_path . $filename ) ) {
		
		return file_get_contents( get_stylesheet_directory_uri() . $svg_path . $filename );

	}
 
	return '';
}

 /** --------------------- */