<?php
/*template name: blog*/
get_header();
?>

<main>
    <section class="blog2column-section">
        <div class="blog2column">
            <div class="inner-blog2column">
                <h2 class="blog2column-h2 blog2column-header">
                    Blog
                </h2>
                <div class="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Blog
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="blog2column-slider-sidebar-wrapper">
        <div class="blog2column-siderbar-wrapper">
            <div>
                <!-- <div class="slider-card-wrapper">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 6,
                        'paged'          => $paged,
                    );

                    $blog_query = new WP_Query($args);

                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) : $blog_query->the_post();
                            $categories = get_the_category();
                            $badge = !empty($categories) ? $categories[0]->name : 'NEWS';
                    ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="slider-card">
                                    <div class="slider-wrapper">
                                        <span class="badge"><?php echo esc_html($badge); ?></span>
                                        <div class="wlslider">
                                            <div>
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail('full'); ?>
                                                <?php else : ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/default.jpg" alt="Default Image">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                        <h3 class="post-title"><?php the_title(); ?></h3>
                                    </div>
                                </div>
                            </a>
                        <?php
                        endwhile;
                        ?>
                </div> -->

                <!-- <div class="slider-card-wrapper">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 6,
                            'paged'          => $paged,
                        );

                        $blog_query = new WP_Query($args);

                        if ($blog_query->have_posts()) :
                            while ($blog_query->have_posts()) : $blog_query->the_post();

                                $categories = get_the_category();
                                $badge = !empty($categories) ? $categories[0]->name : 'NEWS';


                                $raw_images = SCF::get('blog_slider_img', get_the_ID());
                                $images = [];

                                if (is_array($raw_images)) {
                                    foreach ($raw_images as $img) {
                                        if (is_numeric($img)) {
                                            $images[] = esc_url(wp_get_attachment_url($img));
                                        }
                                    }
                                }
                    ?>

                            <?php if (!empty($images)) : ?>
                                <div class="my-slider">
                                    <?php foreach ($images as $img_url) : ?>
                                        <div class="slide">
                                            <img src="<?php echo $img_url; ?>" class="wlslider-img" alt="Slide Image">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>




                            <a href="<?php the_permalink(); ?>">
                                <div class="slider-card">
                                    <div class="slider-wrapper">
                                        <span class="badge"><?php echo esc_html($badge); ?></span>

                                        <?php if (count($images) >= 2) : ?>
                                            <div class="wlslider">
                                                <?php foreach ($images as $img_url) : ?>
                                                    <div>
                                                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php elseif (count($images) === 1) : ?>
                                            <img src="<?php echo esc_url($images[0]); ?>" alt="<?php the_title_attribute(); ?>" class="choose-blog" />
                                        <?php else : ?>
                                            <div>
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail('full', ['class' => 'wlslider-img']); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" alt="Default Image">
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="post-info">
                                        <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                        <h3 class="post-title"><?php the_title(); ?></h3>
                                    </div>
                                </div>
                            </a>

                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div> -->

                <!-- <div class="slider-card-wrapper">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 6,
                            'paged'          => $paged,
                        );

                        $blog_query = new WP_Query($args);

                        if ($blog_query->have_posts()) :
                            while ($blog_query->have_posts()) : $blog_query->the_post();

                                $categories = get_the_category();
                                $badge = !empty($categories) ? $categories[0]->name : 'NEWS';

                                // Get SCF images (attachment IDs)
                                $raw_images = SCF::get('blog_slider_img', get_the_ID());
                                $images = [];

                                if (is_array($raw_images)) {
                                    foreach ($raw_images as $img) {
                                        if (is_numeric($img)) {
                                            $images[] = esc_url(wp_get_attachment_url($img));
                                        }
                                    }
                                }
                    ?>

                            <a href="<?php the_permalink(); ?>">
                                <div class="slider-card">
                                    <div class="slider-wrapper">
                                        <span class="badge"><?php echo esc_html($badge); ?></span>

                                        <?php if (count($images) >= 2) : ?>
                                            <div class="wlslider">
                                                <?php foreach ($images as $img_url) : ?>
                                                    <div>
                                                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="wlslider-img" />
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php elseif (count($images) === 1) : ?>
                                            <img src="<?php echo esc_url($images[0]); ?>" alt="<?php the_title_attribute(); ?>" class="wlslider-img" />
                                        <?php else : ?>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('full', ['class' => 'wlslider-img']); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" alt="Default Image" class="wlslider-img" />
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>

                                    <div class="post-info">
                                        <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                        <h3 class="post-title"><?php the_title(); ?></h3>
                                    </div>
                                </div>
                            </a>

                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div> -->

                <!-- <div class="slider-card-wrapper">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 6,
                            'paged'          => $paged,
                        );

                        $blog_query = new WP_Query($args);

                        if ($blog_query->have_posts()) :
                            while ($blog_query->have_posts()) : $blog_query->the_post();

                                $categories = get_the_category();
                                $badge = !empty($categories) ? $categories[0]->name : 'NEWS';

                                // SCF image field (assumes repeatable image field returning attachment IDs)
                                $raw_images = SCF::get('blog_slider_img', get_the_ID());
                                $images = [];

                                if (is_array($raw_images)) {
                                    foreach ($raw_images as $img) {
                                        if (is_numeric($img)) {
                                            $images[] = esc_url(wp_get_attachment_url($img));
                                        } elseif (is_array($img) && isset($img['url'])) {
                                            $images[] = esc_url($img['url']);
                                        }
                                    }
                                }

                    ?>

                            <a href="<?php the_permalink(); ?>">
                                <div class="slider-card">
                                    <div class="slider-wrapper">
                                        <span class="badge"><?php echo esc_html($badge); ?></span>

                                        <?php if (count($images) >= 2) : ?>
                                            <div class="wlslider">
                                                <?php foreach ($images as $img_url) : ?>
                                                    <div>
                                                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="wlslider-img" />
                                                    </div>
                                                <?php endforeach; ?>
                                                 <button class="custom-prev" type="button" aria-label="Previous Slide">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2column/prev-arrow.png" />
                                                </button>
                                                <button class="custom-next" type="button" aria-label="Next Slide">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2column/next-arrow.png" />
                                                </button>
                                            </div>
                                        <?php elseif (count($images) === 1) : ?>
                                            <img src="<?php echo esc_url($images[0]); ?>" alt="<?php the_title_attribute(); ?>" class="wlslider-img" />
                                        <?php else : ?>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('full', ['class' => 'wlslider-img']); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" alt="Default Image" class="wlslider-img" />
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>

                                    <div class="post-info">
                                        <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                        <h3 class="post-title"><?php the_title(); ?></h3>
                                    </div>
                                </div>
                            </a>

                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div> -->



                <div class="slider-card-wrapper">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = [
                            'post_type'      => 'post',
                            'posts_per_page' => 6,
                            'paged'          => $paged,
                        ];
                        $blog_query = new WP_Query($args);

                        if ($blog_query->have_posts()) :
                            while ($blog_query->have_posts()) : $blog_query->the_post();

                                $categories = get_the_category();
                                $badge = !empty($categories) ? $categories[0]->name : 'NEWS';

                                $raw_images = SCF::get('blog_slider_img', get_the_ID());
                                $images = [];

                                if (is_array($raw_images)) {
                                    foreach ($raw_images as $img) {
                                        if (is_numeric($img)) {
                                            $images[] = esc_url(wp_get_attachment_url($img));
                                        } elseif (is_array($img) && isset($img['url'])) {
                                            $images[] = esc_url($img['url']);
                                     }
                                    }
                                }
                    ?>
                            <div>
                                <div class="slider-card">
                                    <div class="slider-wrapper">
                                        <span class="badge"><?php echo esc_html($badge); ?></span>

                                        <?php if (count($images) >= 2) : ?>
                                            <div class="wlslider" style="position: relative;">
                                                <!-- Prev and Next buttons ABOVE slider images -->


                                                <?php foreach ($images as $img_url) : ?>
                                                    <div>
                                                        <div class="blogpost-img"><img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="wlslider-img" /></div>
                                                        <button class="custom-prev" type="button" aria-label="Previous Slide">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2column/prev-arrow.png" alt="Previous" />
                                                        </button>
                                                        <button class="custom-next" type="button" aria-label="Next Slide">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2column/next-arrow.png" alt="Next" />
                                                        </button>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php elseif (count($images) === 1) : ?>
                                            <div class="blogpost-img"><img src="<?php echo esc_url($images[0]); ?>" alt="<?php the_title_attribute(); ?>" class="wlslider-img" /></div>    
                                        <?php else : ?>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="blogpost-img"><?php the_post_thumbnail('full', ['class' => 'wlslider-img']); ?></div>
                                            <?php else : ?>
                                                <div class="blogpost-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2column/dummy.jpg" alt="Default Image" class="wlslider-img" /></div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>

                                    <div class="post-info">
                                        <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                        <h3 class="post-title"><?php the_title(); ?></h3>

                                    </div>


                                </div>
                                <a href="<?php the_permalink(); ?>" class="button-read-more">Read More<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2column/readmore.png" alt="ReadMore" class="btn-readmore" /></a>
                            </div>
                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>




                <div class="pagination">
                    <?php wp_pagenavi(array('query' => $blog_query)); ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </div>

            <div class="blog-single-sidebar">
                <sidebar class="sidebar-sticky">
                    <img
                        src="<?php bloginfo('template_directory'); ?>/assets/img/common/marrylee.png"
                        class="marrylee-img" />
                    <h5 class="marry-name">Marry Lee</h5>
                    <p class="author">
                        Hi! I`m an author of this blog. Read our post - be in trend!
                    </p>
                    <div class="online-app">
                        <div class="app-wrapper">
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/twitter.png"
                                class="app base-img"
                                alt="base" />
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/twitter-float.png"
                                class="app float-img"
                                alt="float" />
                        </div>
                        <div class="app-wrapper">
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/facebook.png"
                                class="app base-img"
                                alt="base" />
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/facebook-float.png"
                                class="app float-img"
                                alt="float" />
                        </div>
                        <div class="app-wrapper">
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/linkedin.png"
                                class="app base-img"
                                alt="base" />
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/linkedin-float.png"
                                class="app float-img"
                                alt="float" />
                        </div>
                        <div class="app-wrapper">
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/instagram.png"
                                class="app base-img"
                                alt="base" />
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/instragram-float.png"
                                class="app float-img"
                                alt="float" />
                        </div>
                    </div>

                    <div class="categories-wrapper">
                        <h6 class="categories">CATEGORIES</h6>
                        <div class="category-list">
                            <?php
                            $categories = get_categories([
                                'orderby' => 'name',
                                'order'   => 'ASC',
                                'hide_empty' => false
                            ]);

                            foreach ($categories as $category):
                            ?>
                                <div class="category-item">
                                    <span class="category"><?php echo esc_html($category->name); ?></span>
                                    <span class="dash-line"></span>
                                    <span class="page-number"><?php echo esc_html($category->count); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="gallery-wrapper">
                        <h5 class="gallery">GALLERY</h5>
                        <div class="gallery-gp">
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/gallery_01.jpg"
                                alt="gallery_01"
                                class="gallery-img" />
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/gallery_02.jpg"
                                alt="gallery_02"
                                class="gallery-img" />
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/gallery_03.jpg"
                                alt="gallery_03"
                                class="gallery-img" />
                        </div>
                        <div class="gallery-gp">
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/gallery_04.jpg"
                                alt="gallery_04"
                                class="gallery-img" />
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/gallery_05.jpg"
                                alt="gallery_05"
                                class="gallery-img" />
                            <img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/common/gallery_06.jpg"
                                alt="gallery_06"
                                class="gallery-img" />
                        </div>
                        <div class="widget-banner-wrapper">
                            <div class="widget-banner">
                                <div class="widget">
                                    <h2 class="emergemcy-service">
                                        Call for an Emergency Service!
                                    </h2>
                                    <span class="emergency-number">+8 (123) 456 789 12</span>
                                    <div class="emergencycall-wrapper">
                                        <a href="tel:+8(123)45678912" class="emergency-call"><span>Call Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </sidebar>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
