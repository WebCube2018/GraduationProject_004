<?php get_header();
have_posts(); ?>
<h1 class="title-page">
	<?php the_title(); ?>
</h1>
<?php

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
	'posts_per_page' => 3, // количество постов на странице
	'category_name' => "vylety-iz-regionov, 
	vylety-iz-stolicz, sankt-peterburg, moskva, sankt-peterburg-vylety-iz-regionov, moskva-vylety-iz-regionov,",
	'orderby' => 'title',
	'order' => 'ASC',
    'paged'           => $current_page // текущая страница
);
query_posts($args);
?>
<?php while(have_posts()) : the_post(); ?>
    <div class="post-wrap">
        <div class="post-thumbnail">
			<?php the_post_thumbnail("thumbnail"); ?>
        </div>
        <div class="post-content">
            <div class="post-content__post-info">
                <div class="post-date">
					<?php the_date("d.m.Y"); ?>
                </div>
            </div>
            <div class="post-content__post-text">
                <div class="post-title">
					<?php the_title(); ?>
                </div>
				<?php the_excerpt(); ?>
            </div>
            <div class="post-content__post-control">
                <a href="<?php the_permalink(); ?>" class="btn-read-post">
                    Читать далее >>
                </a>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<div class="pagenavi-post-wrap">
	<?php echo paginate_links(
		[
			"prev_text" => "<i class=\"icon icon-angle-double-left\"></i>",
			"next_text" => "<i class=\"icon icon-angle-double-right\"></i>",
			"show_all" => false,
			"add_args" => false,
			"add_fragment" => "",
		]
	); ?>
</div>

<?php get_footer(); ?>

