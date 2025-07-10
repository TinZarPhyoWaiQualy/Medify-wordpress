<?php
/*template name: 404page*/
get_header();
?>

 <main>
      <section class="error-section">
        <div class="error">
          <div class="inner-error">
            <h2 class="error-h2 error-header">Error Page</h2>
            <div class="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Error 404
                </li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <div class="error-wrapper">
        <img
          src="https://wgl-dsites.net/medify/wp-content/themes/medify/img/404.png"
          alt="404"
          class="error-img"
        />

        <h3 class="error-ttl">Sorry We Can't Find That Page!</h3>
        <p class="error-content">
          The page you are looking for was moved, removed, renamed or never
          existed.
        </p>
      </div>
    </main>

<?php
get_footer();