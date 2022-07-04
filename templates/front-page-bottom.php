<div class="clear front-page-bottom">
        <!-- Page Content  -->
        <div class="about-us-content">
            <?php $about_us_content = new WP_Query('page_id=10'); ?>
            <?php while($about_us_content->have_posts()) : $about_us_content->the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <?php the_content();?>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <!-- Cetagory Post Content  -->
        <div class="cetagory-post">
            <?php $args = array(
                'cat'               => 5,
                'posts_per_page'    => 2,
                'orderby'           => 'date',
                'order'             => 'DESC'
            );?>
            <?php $cetagory_post_loop = new Wp_Query($args); ?>
            <?php while( $cetagory_post_loop->have_posts() ) : $cetagory_post_loop->the_post(); ?>
            <article class="cetagory-post-data">
                <ul>
                    <li>
                        <div class="post-image_">
                            <a href="<?php the_permalink();?>">
                                <?php the_post_thumbnail() ?>
                            </a>
                        </div>
                        <div class="post-content_">
                        <h3> <?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a class="read-more-link" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </li>
                </ul>
            </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>