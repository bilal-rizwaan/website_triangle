<?php include 'include/links.php'; ?>
<main id="body-inner">
    <?php include 'include/header.php'; ?>
    <div id="tt-content-wrap">
        <div id="page-header" class="ph-full ph-full-m ph-cap-xxxxlg ph-center ph-image-parallax ph-caption-parallax">
            <div class="page-header-inner tt-wrap">
                <div class="ph-caption">
                    <div class="ph-caption-inner">
                        <h2 class="ph-caption-subtitle">Let's Work Together</h2>
                        <h1 class="ph-caption-title">Contact</h1>
                        <div class="ph-caption-description max-width-700">
                            Feeling good about a new project?<br> Write me and let's talk about it.
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-header-inner ph-mask">
                <div class="ph-mask-inner tt-wrap">
                    <div class="ph-caption">
                        <div class="ph-caption-inner">
                            <h2 class="ph-caption-subtitle">Let's Work Together</h2>
                            <h1 class="ph-caption-title">Write Me</h1>
                            <div class="ph-caption-description max-width-700">
                                Feeling good about a new project?<br> Write me and let's talk about it.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tt-page-content">
            <div class="tt-section padding-top-40 padding-bottom-xlg-120">
                <div class="tt-section-inner tt-wrap">
                    <div class="tt-row tt-xl-row-reverse">
                        <div class="tt-col-xl-5">
                            <div class="tt-contact-info margin-bottom-80">
                                <div class="tt-big-arrow tt-ba-angle-bottom-left tt-anim-fadeinup">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="tt-contact-info-inner">
                                    <div class="margin-bottom-50 tt-anim-fadeinup">
                                        <h6>Let's Talk</h6>
                                        <p>You're just one click away from taking your brand or product from great
                                            to incredible. Fill out the form to share more details about your
                                            project.</p>
                                    </div>
                                    <div class="tt-contact-details margin-bottom-50 tt-anim-fadeinup">
                                        <h6>Details</h6>
                                        <ul>
                                            <li>
                                                <span class="tt-cd-icon"><i class="fas fa-map-marker-alt"></i></span>
                                                <a  class="tt-link" target="_blank" rel="noopener">
													<?php echo $locAddress; ?>
												</a>
                                            </li>
                                            <li>
                                                <span class="tt-cd-icon"><i class="fas fa-phone"></i></span>
                                                <a href="tel:<?php echo $locNumber; ?>" class="tt-link"><?php echo $locNumber; ?></a>
                                            </li>
                                            <li>
                                                <span class="tt-cd-icon"><i class="fas fa-envelope"></i></span>
                                                <a href="mailto:<?php echo $locEmail; ?>" class="tt-link"><?php echo $locEmail; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tt-social-buttons margin-bottom-50 tt-anim-fadeinup">
                                        <h6>Social</h6>
                                        <ul>
                                            <li>
												<a href="https://www.facebook.com/themetorium" class="tt-magnetic-item"
                                                    target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i>
												</a>
											</li>
                                            <li>
												<a href="https://dribbble.com/Themetorium" class="tt-magnetic-item"
                                                    target="_blank" rel="noopener"><i
                                                        class="fa-brands fa-dribbble"></i>
												</a>
											</li>
                                            <li>
												<a href="https://www.behance.net/Themetorium" class="tt-magnetic-item"
                                                    target="_blank" rel="noopener"><i
                                                        class="fa-brands fa-behance"></i>
												</a>
											</li>
                                            <li>
												<a href="https://www.youtube.com/" class="tt-magnetic-item"
                                                    target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i>
												</a>
											</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-xl-7">
                            <form id="tt-contact-form" class="tt-form tt-form-creative tt-form-lg">
                                <div id="tt-contact-form-messages" role="alert">
                                    <div class="tt-cfm-inner"></div>
                                    <div class="tt-cfm-close hide-cursor"><i class="fa-solid fa-xmark"></i></div>
                                </div>
                                <div class="tt-contact-form-inner">
                                    <div class="tt-form-group tt-anim-fadeinup">
                                        <label>What's your name? <span class="required">*</span></label>
                                        <input class="tt-form-control" id="sender-name" type="text" name="name"
                                            placeholder="John Smith" required>
                                    </div>
                                    <div class="tt-form-group tt-anim-fadeinup">
                                        <label>What's your email? <span class="required">*</span></label>
                                        <input class="tt-form-control" id="sender-email" type="email" name="email"
                                            placeholder="john@smith.com" required>
                                    </div>
                                    <div class="tt-form-group tt-anim-fadeinup">
                                        <label>What would you like to talk about? <span
                                                class="required">*</span></label>
                                        <select class="tt-form-control" id="sender-option" name="option" required>
                                            <option value="" disabled selected>Please choose an option</option>
                                            <option value="Say Hello">Say hello</option>
                                            <option value="New Project">New project</option>
                                            <option value="Feedback">Feedback</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="tt-form-group tt-anim-fadeinup">
                                        <label>Your message <span class="required">*</span></label>
                                        <textarea class="tt-form-control" id="sender-message" rows="5" name="message"
                                            placeholder="Hello, can you help me with ..." required></textarea>
                                    </div>
                                    <div class="tt-anim-fadeinup">
                                        <button type="submit" class="tt-btn tt-btn-primary tt-magnetic-item">
                                            <span data-hover="Send Message">Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 border-top">
                <div class="tt-section-inner tt-wrap">
                    <div class="tt-row margin-bottom-40">
                        <div class="tt-col-xl-8">
                            <div class="tt-heading tt-heading-xxxlg no-margin">
                                <h3 class="tt-heading-subtitle tt-text-reveal">Portfolio</h3>
                                <h2 class="tt-heading-title tt-text-reveal">Explore<br> My Work</h2>
                            </div>
                        </div>
                        <div class="tt-col-xl-4 tt-align-self-end tt-xl-column-reverse margin-top-40">
                            <div class="max-width-600 margin-bottom-10 tt-text-uppercase tt-text-reveal">
                                Discover a showcase of my creative journey that reflects my passion for crafting
                                engaging digital experiences
                            </div>
                            <div class="tt-big-round-ptn margin-top-30 margin-bottom-xlg-80 tt-anim-fadeinup">
                                <a href="portfolio.html" class="tt-big-round-ptn-holder tt-magnetic-item">
                                    <div class="tt-big-round-ptn-inner">My<br> Work</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php include 'include/footer.php'; ?>
</main>
<?php include 'include/script.php'; ?>