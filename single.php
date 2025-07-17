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
					<?php if (has_post_thumbnail()) : ?>
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
					<p>
						Rehabilitation medicine is one of the best-kept secrets in
						healthcare. Although the specialty is as old as America’s Civil
						War, few people are familiar with its history and purpose. Born
						out of compassion for wounded soldiers in desperate need of
						societal re-entry and meaningful employment, “physical
						reconstruction” programs were developed to provide everything from
						adaptive equipment to family training, labor alternatives and
						psychological support for veterans.Physical medicine and
						rehabilitation (PM&R) then expanded to meet the needs of those
						injured in World Wars I & II, followed closely by children
						disabled <a href="#">by the polio epidemic.</a> In time, people
						recognized that a broad swath of diseases and traumatic injuries
						required focused medical and physical therapy to achieve optimal
						long term function.
					</p>
					<u>
						Today, cancer patients frequently benefit from comprehensive
						rehabilitation as they recover from the effects of chemo
						(neuropathy, weakness, and cognitive impairments), radiation
						(scarring and range of motion limitations), surgery (flaps,
						plastics procedures, tumor resection, amputations), and brain
						injuries.
					</u>
					<h3>Relieve from Stuffy Nose with No Medications</h3>
					<p>
						Rehabilitation is a phase of recovery occurring after any major
						life-changing medical or surgical event. Our bodies are designed
						to regenerate and repair, though optimizing this process takes
						skilled guidance. PM&R physicians (also known as physiatrists) are
						trained to use physical modalities (stretching, strengthening,
						heat, cold, etc.) to mechanically enhance healing. They prescribe
						medications to manage pain, spasticity, nerve injury, and
						cognitive impairments, while also leveraging the power of physical
						therapy to increase cardiopulmonary fitness, muscle strength and
						flexibility.
					</p>
					<h3>Our Bodies are Designed to Regenerate and Repair</h3>
					<p>
						Inpatient rehab’s prime directive is to get patients back home. To
						succeed at home, patients need to be able to function as
						independently as possible, using trained assistants for managing
						the activities<span> that cannot be performed without help.</span>
						Admission to a rehab hospital or unit offers the patient home
						practice opportunities – with simulated challenges that can
						include everything from terrain parks, test kitchens, medication
						management trials.
					</p>
					<ul>
						<li>Does the channel reach my intended audience?</li>
						<li>
							Is the channel sustainable and affordable within my company’s
							marketing budget?
						</li>
						<li>Will I be able to measure the success of the channel?</li>
						<li>
							Do the channels I’m considering work together to convey my
							message?
						</li>
					</ul>
					<img
						src="<?php bloginfo('template_directory'); ?>/assets/img/singleblog/blogsingle-doctor2.jpg"
						alt="blogsingle-doctor2" />
					<h3>Our Bodies are Designed to Regenerate and Repair</h3>
					<p>
						In other cases when care is palliative, learning new skills and
						being fitted with battery or electric-powered equipment can mean
						the difference between living at home or in an assisted
						environment. Some successful cancer patients come to inpatient
						rehab to practice managing their activities of daily living with
						varied amounts of assistance, preparing for increased needs as
						time goes on so they can enjoy being at home for as long as
						possible.
					</p>
					<blockquote>
						There are no secrets to success. It is the result of preparation,
						hard work, and learning from failure.
						<cite>– Paul Tournier</cite>
					</blockquote>
					<p>
						For the physiatrist, cancer is a cause of impairments that can be
						overcome with creativity and practice, no matter the long-term
						prognosis. Adaptive equipment, physical exercise, and cognitive
						retraining may be applied intensively (3 hours a day in the
						inpatient setting), or at a slower outpatient pace, depending on
						individual need.
					</p>
					<div>
						<a>PREVIOUS</a>
						<a>NEXT</a>
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
// get_sidebar();
get_footer();
