<div class="clear">
        <div class="owl-carousel owl-theme">
        <?php 
            $args = array(
                'posts_per_page'    => 4,
                'orderby'           => 'date',
                'order'             => 'DESC',
                'post_type'         => 'post',
            );
            $slider = new WP_Query($args);
            while($slider->have_posts()) : $slider->the_post();
        ?>
            <div class="slider_image">
                <?php the_post_thumbnail();?>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>