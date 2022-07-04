<?php get_header(); ?>
<div class="container content">
<?php while(have_posts()) : the_post(); ?>
    <div class="featured">
        <?php the_post_thumbnail(); ?>
        <h1><?php the_title()?></h1>
    </div>
    <div class="clear">
        <div class="single-blog-content primary-section">
            <article>
                <div class="post-info">
                    <div class="columns">
                        <?php the_tags(__('Tags for this post : ','udimy-2'),', ',' '); ?>
                    </div>
                    <div class="columns">
                        <?php _e('Categorys : ','udimy-2') . the_category(', '); ?>
                    </div>
                    <div class="columns">
                        <?php _e('Written By : ','udimy-2') . "<span>" . the_author() . "</span>" ;?>
                    </div>
                </div>
                <?php the_content(); ?>
            </article>
            <?php comments_template(); ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>