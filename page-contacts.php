<?php
/*template name: contact*/
/*template name: contact*/
get_header();
?>

<main>
    <section class="contacts-section">
        <div class="contacts">
            <div class="inner-contacts">
                <h2 class="contacts-h2 history-header">Contacts</h2>
                <div class="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=".<?php echo home_url(); ?>/index.html/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="contact-wrapper">
            <div class="inner-contact-wrapper">
                <div class="left-contact">
                    <div class="quick-support our-skill">
                        <span class="our-skill-label">QUICK SUPPORT</span>
                    </div>
                    <h3 class="contact-h3 history-header">Contact Us</h3>
                    <p class="left-contact-p">Private patients, international organizations and corporate businesses
                        feel safe and softing
                        establishing relationships.</p>
                    <div class="contact-icon-wrapper">
                        <div class="contact-icon-flex">
                            <div class="contact-icon phone-icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/contact-us/call.png"
                                    alt="phone"></div>
                            <div class="contact-info">
                                <h3 class="contact-icon-label">CALL US 24/7</h3>
                                <a href="#" class="contact-address">+8 (123) 456 789 12</a>
                            </div>
                        </div>
                        <div class="contact-icon-flex">
                            <div class="contact-icon phone-icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/contact-us/email.png"
                                    alt="email"></div>
                            <div class="contact-info">
                                <h3 class="contact-icon-label">EMAIL ADDRESS</h3>
                                <a href="#" class="contact-address">medify.clinic@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-icon-flex">
                            <div class="contact-icon phone-icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/contact-us/location.png"
                                    alt="phone"></div>
                            <div class="contact-info">
                                <h3 class="contact-icon-label">OUR LOCATION</h3>
                                <a href="#" class="contact-address">27 Division St, New York <br>NY 10002, USA</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-contact">
                    <div class="write-us our-skill">
                        <span class="our-skill-label">WRITE US</span>
                    </div>
                    <h3 class="write-us-h3 history-header">Get in Touch</h3>
                    <!-- <div class="contact-textbox-group">
                            <div class="contact-textbox-flex">
                                <input type="text" placeholder="Your Name *" class="contact-textbox name"
                                    id="contact-textbox name" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Your Name *'">
                                <input type="text" placeholder="Your Email *" class="contact-textbox email"
                                    id="contact-textbox email" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Your Email *'">
                            </div>

                            <div class="contact-textbox-flex">
                                <input type="text" placeholder="Address *" class="contact-textbox address"
                                    id="contact-textbox address" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Address *'">
                                <input type="text" placeholder="Phone *" class="contact-textbox phone"
                                    id="contact-textbox phone" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Phone *'">
                            </div>
                          
                            <textarea name="" id="" placeholder="Message..." class="contact-textarea"
                                id="contact-textarea" onfocus="this.placeholder=''"
                                onblur="this.placeholder='Message... *'"></textarea>
                            <a href="#" class="contact-btn">Send A Message</a>

                            <div class="consultancy-right-lower">
                                <div>Thank you for your message. It has been sent.</div>
                            </div>
                        </div> -->
                    <div class="contact-textbox-group">
                        <?php
                        $page = get_page_by_title('contact');
                        $content = apply_filters('the_content', $page->post_content);
                        echo $content;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-women-section">
        <div class="contact-women">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/contact-us/women.jpg" alt="women">
        </div>
    </section>
</main>

<?php
get_footer();