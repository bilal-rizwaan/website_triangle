<section class="faq">
    <div class="container">
        <div class="head_area mb-5">
            <h2>Frequently Asked Questions
            </h2>
        </div>
        <div class="row d-flex align-items-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"  >
                    <div class="accordion" id="accordionExample">
                        <?php
                        $faqs = file_get_contents('assets/json/faq.json');
                        $faq = json_decode($faqs, true); 
                        $currentUrl = basename($_SERVER['REQUEST_URI'], ".php");
                        $pageID = 'index';
                        if ($currentUrl == '' || $currentUrl == 'index') {
                            $pageID = 'index';
                        } elseif ($currentUrl == 'about-us') {
                            $pageID = 'about-us';
                        }
                        if (isset($faq[$pageID])) {
                            foreach ($faq[$pageID] as $key => $faqItem) {
                                $isFirst = ($key == 0);
                        ?>
                                <div class="accordion-item" id="faq-<?php echo htmlspecialchars($key); ?>">
                                    <p class="accordion-header">
                                        <button class="accordion-button <?php echo $isFirst ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-<?php echo htmlspecialchars($key); ?>" aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>" aria-controls="collapseOne-<?php echo htmlspecialchars($key); ?>">
                                            <?php echo htmlspecialchars($faqItem['heading']); ?>
                                        </button>
                                    </p>
                                    <div id="collapseOne-<?php echo htmlspecialchars($key); ?>" class="accordion-collapse collapse <?php echo $isFirst ? 'hide' : ''; ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p><?php echo htmlspecialchars($faqItem['description']); ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            } 
                        } else {
                            echo "<p>No FAQs found for this page.</p>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"   >
                    <div class="benefits">
                        <img src="assets/images/benefit.webp" alt="benefit">
                        <h2>Hiring Professional Ghostwriters’ Benefits:</h2>
                        <ul>
                            <li><i class="fa-regular fa-circle-check"></i> Ensures timely delivery</li>
                            <li><i class="fa-regular fa-circle-check"></i> Responsive for run time changes</li>
                            <li><i class="fa-regular fa-circle-check"></i> Flexible to your feedback</li>
                            <li><i class="fa-regular fa-circle-check"></i> Fusion of ideas</li>
                            <li><i class="fa-regular fa-circle-check"></i> Adaptability to trendy writing</li>
                        </ul>
                        <div class="btn_group d-flex justify-content-start text-center">
                            <a href="contact-us">BOOK YOUR WRITER</a>
                            <a href="tel:<?php echo $number?>"><?php echo$number?></a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>  