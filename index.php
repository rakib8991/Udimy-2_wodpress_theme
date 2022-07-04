<?php get_header(); ?>
<div class="container content">
    <div class="featured">
        <?php
        $blog_page = get_option('page_for_posts');
        $image_id = get_post_thumbnail_id($blog_page);
        $image = wp_get_attachment_image_url($image_id);
        ?>
        <img src="<?php echo $image; ?>" alt="blogimage">
        <h1><?php echo get_the_title($blog_page);?></h1>
    </div>
    <ul class="blog-post clear">
        <?php while(have_posts()) : the_post(); ?>
            <li class="post-content">
                <div class="post-featured">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <?php the_category(', '); ?>
                </div>
                <div class="post-content">
                    <h3><?php the_title();?></h3>
                    <?php the_excerpt('20'); ?>
                </div>
                <div class="post-information">
                    <div class="author">
                        By: <span><?php the_author(); ?></span>
                    </div>
                    <div class="date">
                        <?php the_time('F j, Y'); ?>
                    </div>
                </div>
                
            </li>
        <?php endwhile; ?>
    </ul>
    
</div>
<?php get_footer(); ?>