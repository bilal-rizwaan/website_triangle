    <section class="reviews attach_two">
        <div class="">
            <div class="head_area" >
                <h2 class="txtcl1">What our pleased clients have to say:</h2>
            </div>
            <div id="reviews" class="owl-carousel owl-theme mt-5" >
                <?php
                $jsonFile = 'assets/json/reviews.json';
                $jsonData = file_get_contents($jsonFile);
                $reviews = json_decode($jsonData, true);
                if (isset($reviews['reviews']) && is_array($reviews['reviews'])) {
                    foreach ($reviews['reviews'] as $review) {
                        echo '<div class="item">';
                        echo '<div class="crd">';
                        echo '<p>' . htmlspecialchars($review['description'], ENT_QUOTES, 'UTF-8') . '</p>';
                        echo '<div class="reviewer-info">';
                        echo '<img src="' . htmlspecialchars($review['image'], ENT_QUOTES, 'UTF-8') . '" alt="review">';
                        echo '<div>';
                        echo '<span>' . htmlspecialchars($review['name'], ENT_QUOTES, 'UTF-8') . '</span>';
                        echo '<small>' . htmlspecialchars($review['designation'], ENT_QUOTES, 'UTF-8') . '</small>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No reviews found.</p>';
                }
                ?>
            </div>
        </div>
    </section>
