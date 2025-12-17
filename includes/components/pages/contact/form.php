<form<section class="contact_us">
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <img src="assets/images/contact-us.gif" alt="contact">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <form action="https://designproboards.com/brand/ebookghostwriting/lead" method="GET" class="services_form">
                    <input type="hidden" name="brand_name" value="ebookghostwriting.services">
                    <input type="hidden" id="lead_area" name="lead_area" value="https://ebookghostwriting.services/contact-form">
                    <input type="text" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;">
                    <input type="hidden" name="form_start_time" value="<?php echo time() ?>">
                    <input type="hidden" name="city" value="<?php echo $ipwhois['city'] ?>">
                    <input type="hidden" name="country" value="<?php echo $ipwhois['country'] ?>">
                    <input type="hidden" name="ipaddress" value="<?php echo $ipwhois['ip'] ?>">
                    <input type="hidden" name="url" value="<?php echo $actual_link ?>">
                    <input type="hidden" name="clickid" value="<?php echo $clickid[5] ?>">
                    <h2>Get in Touch.</h2>
                    <span>Have a Custom Order?</span>
                    <span>Need More Information?</span>
                    <p>Fill out the form below and our team will respond within 24 hours.   </p>
                    <div class="d-flex gap-3">
                        <input type="text" placeholder="Name" name="name" required >
                        <input type="number" placeholder="Number" name="number" required>
                    </div>
                    <input type="email" placeholder="Email Address" name="email" required>
                    <textarea name="message" placeholder="Message"></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>      