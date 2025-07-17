<?php
/*template name: blog*/
get_header();
?>

<main>
    <section class="blog2column-section">
        <div class="blog2column">
            <div class="inner-blog2column">
                <h2 class="blog2column-h2 blog2column-header">
                    Grid 2 Columns + Sidebar
                </h2>
                <div class="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Grid 2 Columns + Sidebar
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

                <div class="slider-card-wrapper">
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

        // ✅ Get individual SCF image fields
        $img1 = SCF::get('blog-slider');
        $img2 = SCF::get('blog-slider');
        $img3 = SCF::get('blog-slider');

        $raw_images = array_filter([$img1, $img2, $img3]); // remove empty ones

        $images = [];
        foreach ($raw_images as $img) {
            if (is_numeric($img)) {
                $img_url = wp_get_attachment_url($img);
            } else {
                $img_url = esc_url($img); // fallback if SCF returns full URL
            }
            if ($img_url) {
                $images[] = $img_url;
            }
        }

        $image_count = count($images);
?>
    <a href="<?php the_permalink(); ?>">
        <div class="slider-card">
            <div class="slider-wrapper">
                <span class="badge"><?php echo esc_html($badge); ?></span>
                <div class="wlslider">
                    <?php if ($image_count >= 2): ?>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($images as $img_url): ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    <?php elseif ($image_count === 1): ?>
                        <img src="<?php echo esc_url($images[0]); ?>" alt="<?php the_title_attribute(); ?>" class="choose-blog" />
                    <?php else: ?>
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full', ['class' => 'choose-blog']);
                        } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" alt="Default" class="choose-blog" />
                        <?php } ?>
                    <?php endif; ?>
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
                            <div class="category-item">
                                <span class="category">Beauty</span>
                                <span class="dash-line"></span>
                                <span class="page-number">4</span>
                            </div>
                            <div class="category-item">
                                <span class="category">Health</span>
                                <span class="dash-line"></span>
                                <span class="page-number">5</span>
                            </div>
                            <div class="category-item">
                                <span class="category">Tips</span>
                                <span class="dash-line"></span>
                                <span class="page-number">6</span>
                            </div>
                            <div class="category-item">
                                <span class="category">Vacination</span>
                                <span class="dash-line"></span>
                                <span class="page-number">4</span>
                            </div>
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
                                        <a href="#" class="emergency-call"><span>Call Now</span></a>
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
