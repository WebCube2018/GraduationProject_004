<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?= wp_get_document_title(); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap">
                        <a href="/">
                            <img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg"
                                    alt="Логотип"
                                    class="logo-wrap__logo-img"
                            >
                        </a>
                    </div>
                </div>
				<?php
				wp_nav_menu(
					[
						"theme_location"  => "head_menu",
						"container"       => "nav",
						"container_class" => "main-navigation",
						"menu_class"      => "nav-list",
						"depth"           => 0,
						'walker'          => new Head_Walker_Nav_Menu()
					]
				);
				?>
            </div>
        </div>
        <div class="bottom-header">
            <div class="search-form-wrap">
                <form action="<?= site_url(); ?>" method="get" class="search-form">
                    <input type="text" name="s" placeholder="Поиск..." value="<?php the_search_query(); ?>"
                           class="search-form__input">
                    <button class="search-form__btn-search"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </header>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">