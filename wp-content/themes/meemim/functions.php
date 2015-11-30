<?php


class True_Walker_Nav_Menu extends Walker_Nav_Menu {
    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output
     * @param object $item Объект элемента меню, подробнее ниже.
     * @param int $depth Уровень вложенности элемента меню.
     * @param object $args Параметры функции wp_nav_menu
     */

                /**
    	         * Starts the list before the elements are added.
                 *
    	         * @see Walker::start_lvl()
    	         *
    	         * @since 3.0.0
    	         *
    	         * @param string $output Passed by reference. Used to append additional content.
    	         * @param int    $depth  Depth of menu item. Used for padding.
    	         * @param array  $args   An array of arguments. @see wp_nav_menu()
    	         */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output = "\n$indent\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        global $wp_query;
        /*
         * Некоторые из параметров объекта $item
         * ID - ID самого элемента меню, а не объекта на который он ссылается
         * menu_item_parent - ID родительского элемента меню
         * classes - массив классов элемента меню
         * post_date - дата добавления
         * post_modified - дата последнего изменения
         * post_author - ID пользователя, добавившего этот элемент меню
         * title - заголовок элемента меню
         * url - ссылка
         * attr_title - HTML-атрибут title ссылки
         * xfn - атрибут rel
         * target - атрибут target
         * current - равен 1, если является текущим элементов
         * current_item_ancestor - равен 1, если текущим является вложенный элемент
         * current_item_parent - равен 1, если текущим является вложенный элемент
         * menu_order - порядок в меню
         * object_id - ID объекта меню
         * type - тип объекта меню (таксономия, пост, произвольно)
         * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
         * type_label - название данного типа с локализацией (Рубрика, Страница)
         * post_parent - ID родительского поста / категории
         * post_title - заголовок, который был у поста, когда он был добавлен в меню
         * post_name - ярлык, который был у поста при его добавлении в меню
         */
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /*
         * Генерируем строку с CSS-классами элемента меню
         */
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // функция join превращает массив в строку
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        /*
         * Генерируем ID элемента
         */
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        /*
         * Генерируем элемент меню
         */
        if ($item->title != 'Legal' && $item->title != 'Other Policies')  {
            $output .= $indent . '<li' . $id . $value . $class_names .'>';

            // атрибуты элемента, title="", rel="", target="" и href=""
            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

            // ссылка и околоссылочный текст
            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '<span class="icon-angle-right"></span>';
            $item_output .= '</a>';
            $item_output .= $args->after;
        } else {
            $item_output = '';
        }


        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }
}
add_theme_support('post-thumbnails');
add_image_size('meemim', 258, 282, array('x_crop_position' => 'center', 'y_crop_position' => 'center'));

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

add_filter( 'wp_nav_menu_objects', 'add_menu_custom_url' );
function add_menu_custom_url( $items ) {

//    print_r($items);
    foreach ( $items as $item ) {
        if ( $item->title == 'Sing In' ) {
            $item->url = 'https://portal.meemim.com/login';
        }

    }

    return $items;
}

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


    /*Show Default Editor on Blog Page ( Administration Panel )*/
if( ! function_exists( 'fix_no_editor_on_posts_page' ) ) {

    /**
     * Add the wp-editor back into WordPress after it was removed in 4.2.2.
     *
     * @param Object $post
     * @return void
     */
    function fix_no_editor_on_posts_page( $post ) {
        if( isset( $post ) && $post->ID != get_option('page_for_posts') ) {
            return;
        }

        remove_action( 'edit_form_after_title', '_wp_posts_page_notice' );
        add_post_type_support( 'page', 'editor' );
    }
    add_action( 'edit_form_after_title', 'fix_no_editor_on_posts_page', 0 );
}

/* Подсчет количества посещений страниц
---------------------------------------------------------- */
add_action('wp_head', 'kama_postviews');
function kama_postviews() {

    /* ------------ Настройки -------------- */
    $meta_key = 'views'; // Ключ мета поля, куда будет записываться количество просмотров.
    $who_count = 0; // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
    $exclude_bots = 1; // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.


    global $user_ID, $post;
    if(is_singular()) {
        $id = (int)$post->ID;
        static $post_views = false;
        if($post_views) return true; // чтобы 1 раз за поток
        $post_views = (int)get_post_meta($id,$meta_key, true);
        $should_count = false;
        switch( (int)$who_count ) {
            case 0: $should_count = true;
                break;
            case 1:
                if( (int)$user_ID == 0 )
                    $should_count = true;
                break;
            case 2:
                if( (int)$user_ID > 0 )
                    $should_count = true;
                break;
        }
        if( (int)$exclude_bots==1 && $should_count ){
            $useragent = $_SERVER['HTTP_USER_AGENT'];
            $notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
            $bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
            if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
                $should_count = false;
        }

        if($should_count)
            if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
    }
    return true;
}

function custom_theme_setup() {
    add_theme_support( 'widgets' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function enqueue_styles() {
    wp_enqueue_style('meemim-styles', get_stylesheet_uri().'style.css');
    wp_enqueue_style('meemim-font-awesome', dirname(get_stylesheet_uri()).'/font/font-awesome/css/meemim.css');
}

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('meemim-style', get_stylesheet_uri());
    wp_enqueue_style('meemim-font-awesome', dirname(get_stylesheet_uri()).'/font/font-awesome/css/meemim.css');
    wp_enqueue_style('meemim-bootstrap', dirname(get_stylesheet_uri()).'/css/bootstrap/css/bootstrap.css');
    wp_enqueue_style('meemim-bootstrap', dirname(get_stylesheet_uri()).'/css/bootstrap/css/bootstrap-theme.css');
    wp_enqueue_style('meemim-media', dirname(get_stylesheet_uri()).'/media-queries.css');
    wp_enqueue_style('jquery-ui', dirname(get_stylesheet_uri()).'/css/jquery-ui.css');
    wp_enqueue_style('jquery-ui', dirname(get_stylesheet_uri()).'/css/jquery-ui.css');
    wp_enqueue_style('slick-css', dirname(get_stylesheet_uri()).'/js/slick-1.5.7/slick/slick.css');
    wp_enqueue_style('slick-theme-css', dirname(get_stylesheet_uri()).'/js/slick-1.5.7/slick/slick-theme.css');
});

function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
    wp_enqueue_script('jquery-js', dirname(get_stylesheet_uri()).'/js/jquery-1.11.3.min.js');
    wp_enqueue_script('BlackWhite-js', dirname(get_stylesheet_uri()).'/js/jquery.BlackAndWhite.min.js');
    wp_enqueue_script('bootstrap-js', dirname(get_stylesheet_uri()).'/css/bootstrap/js/bootstrap.min.js');
//    wp_enqueue_script('masonry-js', dirname(get_stylesheet_uri()).'/js/masonry.pkgd.js');
    wp_enqueue_script('jquery-ui-js', dirname(get_stylesheet_uri()).'/js/jquery-ui.js');
    wp_enqueue_script('slick-js', dirname(get_stylesheet_uri()).'/js/slick-1.5.7/slick/slick.min.js');

//    wp_enqueue_script('masonry-js', dirname(get_stylesheet_uri()).'/js/imagesloaded.pkgd.min.js');
//    wp_enqueue_script('imagefill-js', dirname(get_stylesheet_uri()).'/js/jquery-imagefill.js');


    wp_enqueue_script('function-js', dirname(get_stylesheet_uri()).'/js/functions.js', $deps = array(), $ver = false, true);
    wp_enqueue_script( 'comment-reply' );

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

