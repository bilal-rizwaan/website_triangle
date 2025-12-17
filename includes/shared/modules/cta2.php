<?php
    $content = [
        "book-writing" => [
            "heading" => "Do you need a ghostwriting partner who is dedicated to cooperation and openness?",
            "description" => "Transparency is our principle, not simply a promise. Select our book writing services for the best book ghostwriting adventure in which working together is essential to ensuring that each chapter reflects your vision."
        ],
        "ghostwriting-company" => [
            "heading" => "Just Imagine Yourself as an Author, How Does It Feel?",
            "description" => "Great! Right? You are just one step away. Reach out to our consultant now!"
        ],
        "book-editing" => [
            "heading" => "Make your manuscript a best-seller piece",
            "description" => "By availing of our professional editing services for writers you will remain stress-free while our team will take full responsibility for your dream."
        ],
        "fiction-writing" => [
            "heading" => "Are you looking for a writing partner to help you realize your fiction project?",
            "description" => "There’s nowhere else to look. Our fiction ghostwriters for hire at eBook Ghostwriting Services are experts at transforming ideas into engrossing stories. Are you prepared to tell your story? Together, let’s go off on this creative adventure!"
        ],
        "memoir-writing" => [
            "heading" => "How can we make sure your memoir gets noticed among all the other memoirs?",
            "description" => "Amid the sea of stories, eBook Ghostwriting Services helps your story shine by bringing out its sparkle. Your memoir is a kaleidoscope of your adventures, ready to astonish the world, not just another story."
        ],
        "biography-writing" => [
            "heading" => "Are you trying to find a professional bio writing services that speaks to your soul?",
            "description" => "Our professional biography writers at eBook Ghostwriting Services are experts at writing biographies that encapsulate your experience."
        ],
        "autobiography-writing" => [
            "heading" => "Have you ever imagined your life tale to be skillfully written?",
            "description" => "Give up dreaming. We create fantasy autobiographies that are appealing with our autobiography writing services. Light up your life; make a distinction."        
        ],
        "business-book-writing" => [
            "heading" => "Are You Afraid of Not Being Heard in the Book World?",
            "description" => "Getting around the busy intellectual world, where a gazillion books compete for readers’ attention, can be like trying to find a needle in a haystack. The obvious problem is how to make sure your book not only makes it onto the shelf but also sticks out among the clamor of conflicting stories. Every writer can relate to this dilemma, and at eBook Ghostwriting Services our business book ghostwriters don’t just recognize it as a challenge—they love solving it.                "   
        ],
        "hip-hop-writing" => [
            "heading" => "Are You Prepared to Throw Off Your Guard? Let's Write Your Epic Song Together!",
            "description" => "Let your creative side come out and see how your verses take off. Not only do our ghostwriters for rappers write rhymes at eBook Ghostwriting Services, but we also start a lyrical fire. Are you prepared to deliver lyrics that ooze sincerity and unadulterated energy? Together, we can make your wildest hip-hop aspirations come true!"   
        ],
        "grant-writing" => [
            "heading" => "Reach out to our expert grant-writing consultants today and take the first step toward securing the funding you deserve!",
            "description" => "Let’s turn your vision into reality—contact us now and set your project on the path to success."   
            ],
        "white-paper-writing" => [
            "heading" => "Tired of Boring White Papers?",
            "description" => "Let’s face it: most white papers are about as exciting as watching paint dry. But yours doesn’t have to be. Our team of expert white paper writers can transform your complex ideas into engaging, informative, and persuasive documents that get read."          ],
        "book-formatting" => [
            "heading"=>"Modify Your Manuscript: Leading Stories from Unfinished to Stunning Quality with Our Superior Book Proofreading Services",
            "description" => "Our book proofreading services are like lights in the literary creating world, showing the way from unpolished writings to polished masterpieces. Join us in shaping narratives that leave an indelible mark on the literary landscape."
        ],
        "book-proofreading" => [
            "heading" => "Our Journey of Editing and Book Proofreading",
            "description"=>"eBook Ghostwriting Services guides authors through the intricacies of proofreading and editing, key pillars in achieving literary excellence. Proofreading ensures meticulous correction of punctuation, grammar, and spelling, guaranteeing flawless accuracy in every manuscript. It serves as the final checkpoint before presenting the work to the audience. Our dedicated book proofreaders prioritize clarity, meticulously scrutinizing each word for perfection. On the other hand, editing acts as a creative chisel refining the narrative’s structure, addressing minor issues, polishing language, and enhancing overall flow. Our collaborative approach with authors ensures the full development of their manuscripts.",
        ],
        "children-book-editing" => [
            "heading" => "How can you ensure your children's book captivates young minds?",
            "description"=>"Experience the magic of storytelling brilliance as our expert editing enhances your child’s book, leaving an indelible mark on young imaginations.",
        ],
        "book-cover-design" => [
            "heading" => "Does Your Book Cover Lack the 'Wow' Factor?",
            "description"=>"Get ready for a change! Our creative wizards are experts at giving your book cover that “wow” element, turning it into a visually stunning piece that draws in readers like a magnet. Let’s up your cover game so that people can’t help but notice your book.",
        ],
        "book-publishing" => [
            "heading" => "Elevating Your Story To The Pinnacle It Merits, From Inception To Release.",
            "description"=>" Our kdp amazon self-publishing expertise goes above and beyond the norm, turning your text into an engrossing work of art. Make use of the power of professional publishing, where every page reveals a tale of accuracy, commitment, and creative genius.",
        ],
        "book-marketing-company" => [
            "heading" => "Our Book Marketing Services Catapult Your Narrative into the Hearts of Readers Worldwide.",
            "description"=>"Experience the magic of book marketing services as our expert marketers enhance your book’s presence, leaving an indelible mark on readers’ minds.",
        ],
    ];

    // Get the current URL path
    $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // Clean and normalize the path (trim slashes and convert to lowercase)
    $currentPath = trim($currentPath, '/');
    $currentPath = strtolower($currentPath);

    // Adjust path to check for main page cases
    if ($currentPath === "" || $currentPath === "index") {
        $currentPath = "index";
    }

    // Debugging output to check the path being used
    echo "<!-- Debug: Current Path = $currentPath -->";

    // Function to get the matching content based on the URL path
    function getCompanyContent_CT2($path, $content)
    {
        // If a matching key is found, return the content. Otherwise, return default content.
        return $content[$path] ?? $content["index"];
    }

    // Fetch the appropriate content based on the current URL path
    $currentPath = explode('/', $currentPath);
    $currentPath = $currentPath[count($currentPath) - 1];
    $data = getCompanyContent_CT2($currentPath, $content);
    $heading = $data["heading"];
    $description = $data["description"];
?>
<section class="home_cta module_cta">
        <div class="container">
            <div class="row d-flex align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="content">
                        <h2 class="txtcl1">
                           <?php echo $heading ?>
                        </h2>
                        <p class="my-3 text-dark">
                            <?php echo $description ?>
                        </p>
                        <div class="btn_group d-flex justify-content-start text-center">
                            <a href="contact-us">GET A QUOTE</a>
                            <a href="tel:<?php echo $number?>"><?php echo $number?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>