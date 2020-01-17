<?php get_header();
the_post(); ?>
<div class="article-title title-page">
	<?php the_title(); ?>
</div>
<div class="article-image">
	<?php the_post_thumbnail("medium"); ?>
<div class="article-info">
	<div class="post-date">
		<?php the_date("d.m.Y"); ?>
	</div>
</div>
<div class="article-text">
	<?php the_content(); ?>
</div>
<div class="article-pagination">
    <?php if ($prevPost = get_previous_post()) : ?>
    <div class="article-pagination__block pagination-prev-left">
        <a href="<?=get_permalink($prevPost->ID);?>" class="article-pagination__link">
            <i class="icon icon-angle-double-left"></i>Предыдущая статья
        </a>
        <div class="wrap-pagination-preview pagination-prev-left">
            <div class="preview-article__img">
                <?=get_the_post_thumbnail($prevPost->ID, "prevnext");?>
            </div>
            <div class="preview-article__content">
                <div class="preview-article__info">
                    <a href="#" class="post-date">
                        <?=get_the_date("d.m.Y", $prevPost->ID);?>
                    </a>
                </div>
                <div class="preview-article__text">
	                <?=get_the_title($prevPost->ID);?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
	<?php if ($nextPost= get_next_post()) : ?>
    <div class="article-pagination__block pagination-prev-right">
        <a href="<?=get_permalink($nextPost->ID);?>" class="article-pagination__link">
            Сдедующая статья<i class="icon icon-angle-double-right"></i>
        </a>
        <div class="wrap-pagination-preview pagination-prev-right">
            <div class="preview-article__img">
                <?=get_the_post_thumbnail($nextPost->ID, "prevnext");?>
            </div>
            <div class="preview-article__content">
                <div class="preview-article__info">
                    <a href="#" class="post-date">
	                    <?=get_the_date("d.m.Y", $nextPost->ID);?>
                    </a>
                </div>
                <div class="preview-article__text">
	                <?=get_the_title($nextPost->ID);?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>