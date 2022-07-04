<?php 
/**
 * Template Name: No Sidebar
 */
 get_header(); ?>
<div class="container content">
    <?php while(have_posts()) : the_post(); ?>
    <div class="featured">
        <?php if(has_post_thumbnail()){ ?>
            <?php the_post_thumbnail(); ?>
            <h1><?php the_title()?></h1>
        <?php }else{ ?>
            <h1><?php the_title()?></h1>
        <?php } ?>
    </div>
    <?php the_content(); ?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>