<section class="faq service_faq">
    <div class="container">
        <div class="head_area mb-5">
            <h2 class="txtcl1">Frequently Asked Questions
            </h2>
        </div>
        <div class="accordion row" id="accordionExample">
                <?php
                $faqs = file_get_contents('assets/json/service-faq.json');
                $faq = json_decode($faqs, true); 
                $currentUrl = basename($_SERVER['REQUEST_URI'], ".php");
                $pageID = 'book-writing';
                if ($currentUrl == 'book-writing' || $currentUrl == 'book-writing') {
                    $pageID = 'book-writing';
                } elseif ($currentUrl == 'contact-us') {
                    $pageID = 'contact-us';
                }
                if (isset($faq[$pageID])) {
                    $faqItems = $faq[$pageID];
                    $totalItems = count($faqItems);
                    $columns = 2; // Number of columns
                    $itemsPerColumn = ceil($totalItems / $columns); // Items per column
                    $activeSet = false; // Track if the default active item has been set
                    // Split FAQs into columns
                    for ($col = 0; $col < $columns; $col++) {
                        echo '<div class="col-lg-6 col-md-6 col-sm-12">';
                        for ($i = $col * $itemsPerColumn; $i < ($col + 1) * $itemsPerColumn && $i < $totalItems; $i++) {
                            $faqItem = $faqItems[$i];
                            $isActive = !$activeSet; // First item across all columns is active
                            $activeSet = $activeSet || $isActive; // Ensure only one item is active
                    ?>
                    <div class="accordion-item" id="faq-<?php echo htmlspecialchars($i); ?>">
                        <p class="accordion-header">
                            <button class="accordion-button <?php echo $isActive ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne-<?php echo htmlspecialchars($i); ?>" aria-expanded="<?php echo $isActive ? 'true' : 'false'; ?>" aria-controls="collapseOne-<?php echo htmlspecialchars($i); ?>">
                                <?php echo htmlspecialchars($faqItem['heading']); ?>
                            </button>
                        </p>
                        <div id="collapseOne-<?php echo htmlspecialchars($i); ?>" class="accordion-collapse collapse <?php echo $isActive ? 'hide' : ''; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p><?php echo htmlspecialchars($faqItem['description']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                    echo '</div>'; // End of column
                }
            } else {
                echo "<p>No FAQs found for this page.</p>";
            }
            ?>
        </div>
    </div>
</section> 