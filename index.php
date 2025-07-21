<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medify
 */

get_header();
?>
<main>
  <section>
    <div class="top-slider">
      <div class="top-mv-slider">
        <div class="top-slider-content">
          <h2 class="top-slider-h2">Hi! I'm <span class="top-h2-span">Dr.Paul May,</span> Family Therapist
          </h2>
          <p class="top-slider-p">Since the first days of operation of Medify, our team has been focused
            on building a high-quality medical service. </p>
        </div>
      </div>
      <div class="top-mv-slider top-mv-two">
        <div class="top-slider-content top-slider-two">
          <h2 class="top-slider-h2">Best <span class="top-h2-span">Lab Research</span> Available 24/7
          </h2>
          <p class="top-slider-p">Since the first days of operation of Medify, our team has been focused
            on building a high-quality medical service. </p>
        </div>
      </div>
      <div class="top-mv-slider top-mv-three">
        <div class="top-slider-content">
          <h2 class="top-slider-h2">Take care of your <span class="top-h2-span">Health Now</span>
          </h2>
          <p class="top-slider-p">Since the first days of operation of Medify, our team has been focused
            on building a high-quality medical service. </p>
        </div>
      </div>
    </div>
    <a class="top-slider-btn next"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/left-arrow.png" alt=""></a>
    <a class="top-slider-btn prev"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/right-arrow.png" alt=""></a>
  </section>

  <section>
    <div class="top-benefit">
      <div class="top-benefit-flex">
        <div class="top-benefit-left">
          <div class="benefit">
            <span class="benefit-label">BENEFITS</span>
          </div>
          <h3 class="top-benefit-h3">
            Qualified Therapist Consultation at Any Time at Any Place
          </h3>
        </div>
        <div class="top-benefit-right">
          <p class="top-benefit-p">
            Family medicine is a principle of medical support where the
            general practitioner is assigned to the family for many years.
            <strong>Family medicine is one of the most demanded.</strong>
          </p>
          <div class="top-sign-img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/top/top-signature.png" alt="top-signature" />
          </div>
        </div>
      </div>
    </div>

    <div class="benefit-card-container">
      <div class="benefit-card-wrapper">
        <div class="benefit-card premium-care">
          <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/premium-care.jpg" alt="premium-care" class="premium-care-img">
          </div>
          <h3 class="benefit-card-label premium-care-label">Premium Care</h3>
        </div>

        <div class="benefit-card quality-therapy">
          <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/quality-therapy.jpg" alt="quality-therapy" class="premium-care-img">
          </div>
          <h3 class="benefit-card-label quality-therapy-label">Quality Therapy</h3>
        </div>
        <div class="benefit-card laboratory-test">
          <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/laboratory-test.jpg" alt="laboratory-test" class="premium-care-img">
          </div>
          <h3 class="benefit-card-label laboratory-test-label">Laboratory Test</h3>
        </div>
      </div>
    </div>
  </section>

  <section class="top-counter-wrapper">
    <div class="counter top-counter">
      <div class="counter-card">
        <div class="counter-icons-wrapper">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/top-heartbeat.png" alt="heartbeat">

        </div>
        <div class="num">
          <span>2500</span>
        </div>
        <div class="top-counter-h3">
          <h3>SATISFIED PATIENTS</h3>
        </div>
      </div>
      <div class="counter-card">
        <div class="counter-pharmacies-wrapper">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/top-pharmacy.png" alt="pharmacy">
        </div>
        <div class="num">
          <span>15</span>
        </div>
        <div class="top-counter-h3">
          <h3>HEALTH SECTIONS</h3>
        </div>
      </div>
      <div class="counter-card">
        <div class="counter-icons-wrapper">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/top-prescription.png" alt="prescription">
        </div>
        <div class="num">
          <span>40</span>
        </div>
        <div class="top-counter-h3">
          <h3>KINDS OF RESEARCH</h3>
        </div>
      </div>
      <div class="counter-card">
        <div class="counter-pharmacies-wrapper">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/top-pharmacy (2).png" alt="pharmacy">
        </div>
        <div class="num">
          <span>25</span>
        </div>
        <div class="top-counter-h3">
          <h3>AWARDS WINNING</h3>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="about-me-flex">
      <div class="about-me-img">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/top/about-me.png" alt="about me" />
      </div>

      <div class="about-me-left">
        <div class="about-me">
          <span class="about-me-label">ABOUT ME</span>
        </div>
        <h3 class="about-me-h3 history-header">
          Professional Medical Care in Full Measure
        </h3>
        <p class="about-me-p first">
          For us, there are no minor aspects, because a quality result
          always depends on trifles. Over the years of our activities, we
          have gained the unique experience of organizing medical services
          for citizens and foreign nationals.
        </p>
        <p class="about-me-p second">
          Private patients, international organizations and corporate
          businesses feel safe and comfortable in establishing
          relationships.
        </p>
      </div>
    </div>
  </section>

  <section>
    <div class="top-adv-service-wrapper">
      <div>
        <div class="adv-services-cover above">
          <div class="top-adv-services">
            <span>ADVANCED SERVICES</span>
          </div>
          <div class="top-adv-services-header">
            <h3 class="top-adv-title">What Can I Offer for You</h3>
          </div>
          <div class="top-content-cover">
            <span class="top-content">
              We have introduced the principle of family medicine, which
              means that the family practitioner will handle the majority of
              medical requests, with a specialists involved only if
              necessary.
            </span>
          </div>
        </div>
        <div class="adv-services-card-wrapper">
          <div class="adv-services-card">
            <div>
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/aboutus/stethoscope (1).png" alt="medical" class="family-care-img" />
            </div>
            <div class="family-care-ttl">
              <h4>Partners Info</h4>
            </div>
            <div class="family-care-content">
              <span>Family medicine is one of the most demanded fields in the
                provision of medical care in Europe.</span>
            </div>
          </div>

          <div class="adv-services-card">
            <div>
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/aboutus/teddy-bear (1).png" alt="medical" class="pediatrics-care-img" />
            </div>
            <div class="pediatrics-care-ttl">
              <h4>News & Updates</h4>
            </div>
            <div class="pediatrics-care-content">
              <span>Family medicine is one of the most demanded fields in the
                provision of medical care in Europe.</span>
            </div>
          </div>

          <div class="adv-services-card">
            <div>
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/aboutus/microscope (3).png" alt="medical" class="adv-care-img" />
            </div>
            <div class="adv-care-ttl">
              <h4>Documentation</h4>
            </div>
            <div class="adv-care-content">
              <span>Family medicine is one of the most demanded fields in the
                provision of medical care in Europe.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="care-amenitie">
      <div class="inner-care-amenitie">
        <div class="care-a-content about-me-care">
          <div class="care-a">
            <span>CARE & AMENITIES</span>
          </div>
          <h3 class="care-a-h3 history-header">Why Choose Me?</h3>
          <div class="carea-lower-content">
            <div class="lower-carea top-lower-carea">
              <h4 class="lower-carea-h4 active" data-target="quality">Quality</h4>
              <h4 class="lower-carea-h4" data-target="reaction">Reaction</h4>
              <h4 class="lower-carea-h4" data-target="focus">Focus</h4>
            </div>
            <div class="lower-carea-text">
              <div class="lower-carea-panel active" id="quality">
                <p>The major goal of family medicine is to build trust between the patient and the
                  general practitioner, which allows achieving the best treatment outcome.</p>
                <p>The specific features of work of the general practitioner (family doctor) are more
                  reasonable and beneficial to both GPs and patients in many respects.</p>
              </div>

              <div class="lower-carea-panel" id="reaction">
                <p>The specific features of work of the general practitioner (family doctor) are more
                  reasonable and beneficial to both GPs and patients in many respects.</p>
                <p>The major goal of family medicine is to build trust between the patient and the
                  general practitioner, which allows achieving the best treatment outcome.</p>
              </div>

              <div class="lower-carea-panel" id="focus">
                <p>The major goal of family medicine is to build trust between the patient and the
                  general practitioner, which allows achieving the best treatment outcome.</p>
                <p>The specific features of work of the general practitioner (family doctor) are more
                  reasonable and beneficial to both GPs and patients in many respects.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="logo-slider-wrapper">
      <div class="logo-slider-track">
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sos.png" alt="sos"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sigma.png" alt="Sigma"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/medix.png" alt="Medix"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/health-care.png" alt="HealthCare"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/circle.png" alt="circle"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/wglab.png" alt="Lab"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/united.png" alt="United"></div>

        <!-- Duplicated set for infinite scroll effect -->
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sos.png" alt="sos"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sigma.png" alt="Sigma"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/medix.png" alt="Medix"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/health-care.png" alt="HealthCare"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/circle.png" alt="circle"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/wglab.png" alt="Lab"></div>
        <div class="ad-slider"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/united.png" alt="United"></div>
      </div>
    </div>
  </section>

  <section class="call-center-section">
    <div class="call-center">
      <div class="call-center-img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/24-hours1.png" alt="phone"></div>
      <h3 class="call-center-h3">
        <p class="call-center-label">Need a Doctor for Check-up? Call for an Emergency Service!</p>
        <a href="tel:+8(123)45678912" class="call-center-no"><p>+8 (123) 456 789 12 </p></a>
      </h3>
    </div>
  </section>

  <section class="top-our-media-wrapper">
    <div class="top-our-media above">
      <div class="top-our-team-service">
        <span>OUR MEDIA</span>
      </div>
      <div class="top-adv-services-header">
        <h3 class="top-ourteam-title">Read Latest News</h3>
      </div>
      <div class="top-content-cover">
        <span class="top-ourteam-content">
          We have introduced the principle of family medicine, which means
          that the family practitioner will handle the majority of medical
          requests, with a specialists involved only if necessary.
        </span>
      </div>
    </div>

    <!-- <div class="top-our-team">

      <?php
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3, // Number of posts to show
      );

      $blog_query = new WP_Query($args);

      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
          $categories = get_the_category();
          $badge = !empty($categories) ? $categories[0]->name : 'NEWS';
      ?>
         
            <div class="slider-ourteam-card">
              <div class="slider-wrapper">
                <span class="badge"><?php echo esc_html($badge); ?></span>
                <div class="top-wlslider">
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
                <h3 class="post-title">
                  <?php the_title(); ?>
                </h3>
              </div>
            </div>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

    </div> -->

    <div class="top-our-team">
  <?php
  $args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3, // Number of posts to show
  );

  $blog_query = new WP_Query($args);

  if ($blog_query->have_posts()) :
    while ($blog_query->have_posts()) : $blog_query->the_post();
      $categories = get_the_category();
      $badge = !empty($categories) ? $categories[0]->name : 'NEWS';
  ?>
      <div class="slider-ourteam-card">
        <div class="slider-wrapper">
          <span class="badge"><?php echo esc_html($badge); ?></span>
          <div class="top-wlslider">
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

          <a href="<?php the_permalink(); ?>" class="button-read-more latest">
            Read More
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2column/readmore.png" alt="ReadMore" class="btn-readmore" />
          </a>
        </div>
      </div>
  <?php
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</div>

  </section>
</main>


<?php
get_footer();
?>