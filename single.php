<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package medify
 */

get_header();
?>

<main>
	<section class="blogsingle-section">
		<div class="inner-blogsingle">
			<h2 class="blogsingle-header">Blog</h2>
			<?php
			$categories = get_the_category();
			$category_name = !empty($categories) ? strtolower(esc_html($categories[0]->name)) : 'uncategorized';
			?>
			<nav class="breadcrumb-nav">
				<ul class="blogsingle-breadcrumb">
					<li class="bs-breadcrumb-item"><a href="<?php echo home_url(); ?>/" class="bs-home">Home</a></li>
					<li class="bs-breadcrumb-items"><?php echo $category_name; ?> </li>
					<li class="bs-breadcrumb-item active">Hospital Nursing Care:</li>
					<li class="bs-breadcrumb-item active">Some Observations</li>
				</ul>
			</nav>
		</div>
	</section>
	<section class="blogsingle-sidebar-wrapper">
		<div class="blog-single-wrapper">
			<div class="blog-single-leftside">
				<div class="blog-single-doctor">
					<?php
					$categories = get_the_category();
					$badge = !empty($categories) ? $categories[0]->name : 'NEWS';
					?>
					<span class="beauty-box"><?php echo esc_html($badge); ?></span>
					<!-- <?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('full'); ?>
					<?php else : ?>
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/default.jpg" alt="Default Image">
					<?php endif; ?> -->

					<?php
					// 👇 SCF Slider Code Inserted Here
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

					if (count($images) >= 2) : ?>
						<div class="wlslider slidergp" style="position: relative;">
							<?php foreach ($images as $img_url) : ?>
								<div class="imggp">
									<img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" />
									<button class="custom-prev btn-prev" type="button" aria-label="Previous Slide">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2column/prev-arrow.png" alt="Previous" />
									</button>
									<button class="custom-next btn-next" type="button" aria-label="Next Slide">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2column/next-arrow.png" alt="Next" />
									</button>
								</div>
							<?php endforeach; ?>
						</div>

					<?php elseif (count($images) === 1) : ?>
						<div class="blogpost-img single-img">
							<img src="<?php echo esc_url($images[0]); ?>" alt="<?php the_title_attribute(); ?>" />
						</div>
					<?php elseif (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('full'); ?>
					<?php else : ?>
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/default.jpg" alt="Default Image">
					<?php endif; ?>


					<div class="beauty">
						<span class="blog-single-date"><?php echo get_the_date('F j, Y'); ?></span>
						<span class="developer">BY<a href="#" class="bydeveloper">DEVELOPER</a></span>
						<span class="comments">COMMENTS</span>
					</div>
				</div>
				<div class="blog-single">
					<h2><?php the_title(); ?></h2>
					<?php echo the_content(); ?>

					<div class="post-navigation">
						<div class="prev-post">
							<?php previous_post_link('%link', 'PREVIOUS '); ?>
						</div>
						<div class="next-post">
							<?php next_post_link('%link', 'NEXT'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-single-sidebar">
				<sidebar>
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/marrylee.png" class="marrylee-img" />
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
// get_sidebar();
get_footer();
