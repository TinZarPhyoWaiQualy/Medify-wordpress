<?php
/*template name: faq */
get_header();
?>
<main>
  <section class="faq-section">
    <div class="faq">
      <div class="inner-faq">
        <h2 class="faq-h2 faq-header">FAQ</h2>
        <div class="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQ</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="faq-question-answwer-cover">
    <span class="faq-label">FAQ</span>
    <div class="faq-second-section">
      <div class="faq-intro">
        <h2 class="intro-ttl">Have Any Questions?</h2>
        <p class="paragraph">
          The major goal of family medicine is to build trust between the
          patient and the general practitioner, which allows achieving the
          best treatment outcome.
        </p>
        <p class="paragraph">
          The specific features of work of the general practitioner (family
          doctor) are more reasonable and beneficial to both GPs and
          patients in many respects.
        </p>
      </div>


      <?php
      $faqs = SCF::get('faq-item'); // Get the repeater field
      if (!empty($faqs)):
      ?>
        <div class="faq-list">
          <?php foreach ($faqs as $faq): ?>
            <div class="faq-item">
              <div class="faq-question">
                <h4 class="faq-ttl"><?php echo esc_html($faq['faq-question']); ?></h4>
              </div>
              <div class="faq-answer">
                <?php echo wp_kses_post($faq['faq-answer']); ?>
              </div>
            </div>
          <?php endforeach; ?>


          <div class="faq-item">
            <div class="faq-question">
              <h4 class="faq-ttl">Who are always careful to our patient?</h4>
            </div>
            <div class="faq-answer">
              The specific features of work of the general practitioner
              (family doctor) are more reasonable and beneficial to both GPs
              and patients in many respects.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              <h4 class="faq-ttl">What has access to my health and life?</h4>
            </div>
            <div class="faq-answer">
              The specific features of work of the general practitioner
              (family doctor) are more reasonable and beneficial to both GPs
              and patients in many respects.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              <h4 class="faq-ttl">
                Who are allways carefull to our patient?
              </h4>
            </div>
            <div class="faq-answer">
              The specific features of work of the general practitioner
              (family doctor) are more reasonable and beneficial to both GPs
              and patients in many respects.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              <h4 class="faq-ttl">What is Medify and how does it work?</h4>
            </div>
            <div class="faq-answer">
              The specific features of work of the general practitioner
              (family doctor) are more reasonable and beneficial to both GPs
              and patients in many respects.
            </div>
          </div>
        </div>
      <?php else: ?>
        <p>No FAQs found.</p>
      <?php endif; ?>

    </div>
  </section>

  <section class="counter-wrapper">
    <div class="counter">
      <div class="counter-card">
        <div class="counter-icons-wrapper">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/img/common/heartbeat (1).png"
            alt="heartbeat" />
        </div>
        <div class="num">
          <span>2500</span>
        </div>
        <div class="counter-h3">
          <h3>SATISFIED PATIENTS</h3>
        </div>
      </div>
      <div class="counter-card">
        <div class="counter-pharmacies-wrapper">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/pharmacy.png" alt="pharmacy" />
        </div>
        <div class="num">
          <span>15</span>
        </div>
        <div class="counter-h3">
          <h3>HEALTH SECTIONS</h3>
        </div>
      </div>
      <div class="counter-card">
        <div class="counter-icons-wrapper">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/img/common/prescription (1).png"
            alt="prescription" />
        </div>
        <div class="num">
          <span>40</span>
        </div>
        <div class="counter-h3">
          <h3>KINDS OF RESEARCH</h3>
        </div>
      </div>
      <div class="counter-card">
        <div class="counter-pharmacies-wrapper">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/pharmacy (1).png" alt="pharmacy" />
        </div>
        <div class="num">
          <span>25</span>
        </div>
        <div class="counter-h3">
          <h3>AWARDS WINNING</h3>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="support-center-wrapper">
      <div class="support-center above">
        <div class="adv-services">
          <span>SUPPORT CENTER</span>
        </div>
        <div class="adv-services-header">
          <h3>Still Need Help?</h3>
        </div>
      </div>
    </div>
    <div class="support-center-card">
      <div class="adv-services-card-wrapper">
        <div class="adv-services-card">
          <div>
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/img/aboutus/stethoscope (1).png"
              alt="medical"
              class="family-care-img" />
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
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/img/aboutus/teddy-bear (1).png"
              alt="medical"
              class="pediatrics-care-img" />
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
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/img/aboutus/microscope (3).png"
              alt="medical"
              class="adv-care-img" />
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
  </section>
</main>
<?php
get_footer();
