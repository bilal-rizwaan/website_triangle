<section class=home_partner><div class=container><div class=head_area><h2>Choosing Us is Choosing Writing Partner</h2><p>Our ebook ghostwriting services are exceptional for different reasons.</div><div class="d-flex justify-content-center mt-4 row"><?php
                    $partners = file_get_contents('assets/json/home-partner.json');
                    $data = json_decode($partners, true);
                    foreach ($data as $key => $partner) {
                    ?><div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xl-3 col-xxl-3"><div class=crd id="services-<?php echo htmlspecialchars($key); ?>"><h3><?php echo htmlspecialchars($partner['title']); ?></h3><p><?php echo htmlspecialchars($partner['description']); ?></div></div><?php } ?></div></div></section>