<section class="portfolio">
        <div class="container-fluid">
                <div class="head_area" >
                    <h2 class="text-white">CREATIVE PORTFOLIO</h2>
                    <p class="text-white">When it comes to publishing a book, we have it covered. Check out our impressive portfolio, and we’re sure you’ll get your book published with us.</p>
                </div>
                <div id="portfolio" class="owl-carousel owl-theme mt-5" >
                    <?php
                    $portfolios = file_get_contents('assets/json/portfolio.json');
                    $data = json_decode($portfolios, true);
                    foreach ($data as $key => $portfolio) {
                    ?>
                    <div class="item" id="portfolio-<?php echo htmlspecialchars($key); ?>">
                        <a href="<?php echo htmlspecialchars($portfolio['img']); ?>" data-fancybox>
                            <img src="<?php echo htmlspecialchars($portfolio['img']); ?>" alt="icon">
                        </a>
                    </div>
                    <?php }?>
                </div>
        </div>
</section>