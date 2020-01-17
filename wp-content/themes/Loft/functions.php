<?php
//Добавляем срикпты и стили
add_action("wp_enqueue_scripts", "includeCssAndJs");

function includeCssAndJs(){
	wp_enqueue_style("lib", get_stylesheet_directory_uri() . "/css/libs.min.css", [], null);
	wp_enqueue_style("main", get_stylesheet_directory_uri() . "/css/main.css", [], null);
	wp_enqueue_style("mobile", get_stylesheet_directory_uri() . "/css/media.css", [], null);

	wp_enqueue_script( "jquery");
	wp_enqueue_script(
		"main",
		get_stylesheet_directory_uri() . "/js/main.js",
		["jquery"],
		null,
		true
	);
}

//Регистрируем меню
register_nav_menus(
	[
		"head_menu" => "Меню в шапке",
		"foot_menu" => "Меню в подвале",
	]
);

//Меняем header меню
class Head_Walker_Nav_Menu extends Walker_Nav_Menu {
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output
	 * @param object $item Объект элемента меню, подробнее ниже.
	 * @param int $depth Уровень вложенности элемента меню.
	 * @param object $args Параметры функции wp_nav_menu
	 */
	public function start_el(&$output, $item, $depth = 0, $args = NULL, $id = 0) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : "";

		$class_names = "class=\"nav-list__nav-item\"";

		$output .= $indent . "<li " . $class_names ." >";

		$attributes = ! empty($item->url) ? " href=\"". esc_attr($item->url) ."\" " : "";
		
		$item_output = $args->before;
		$item_output .= "<a" . $attributes . "class=\"nav-list__nav-item__nav-link\">";
		$item_output .= $args->link_before . apply_filters( "the_title", $item->title, $item->ID ) . $args->link_after;
		$item_output .= "</a>";
		$item_output .= $args->after;

		$output .= apply_filters( "walker_nav_menu_start_el", $item_output, $item, $depth, $args );
	}
}

//Меняем footer меню
class Foot_Walker_Nav_Menu extends Walker_Nav_Menu {
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output
	 * @param object $item Объект элемента меню, подробнее ниже.
	 * @param int $depth Уровень вложенности элемента меню.
	 * @param object $args Параметры функции wp_nav_menu
	 */
	public function start_el(&$output, $item, $depth = 0, $args = NULL, $id = 0) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : "";

		$class_names = "class=\"b-menu__list__item\"";

		$output .= $indent . "<li " . $class_names ." >";

		$attributes = ! empty($item->url) ? " href=\"". esc_attr($item->url) ."\" " : "";

		$item_output = $args->before;
		$item_output .= "<a" . $attributes . "class=\"b-menu__list__item__link\">";
		$item_output .= $args->link_before . apply_filters( "the_title", $item->title, $item->ID ) . $args->link_after;
		$item_output .= "</a>";
		$item_output .= $args->after;

		$output .= apply_filters( "walker_nav_menu_start_el", $item_output, $item, $depth, $args );
	}
}

//Включаем добавление изображений
add_theme_support("post-thumbnails");

add_image_size("prevnext", 160, 109, true);