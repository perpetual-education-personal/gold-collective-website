<?php get_header() ?>


<?php

    // INDEX PAGES
    if (is_page('home')) {
        include('templates/pages/home.php');
    }

    if (is_page('style-guide')) {
        include('templates/pages/style-guide.php');
    }

    if (is_page('highlights')) {
        include('templates/pages/highlights.php');
    }

    if (is_page('weddings')) {
        include('templates/pages/weddings.php');
    }

    if (is_page('about')) {
        include('templates/pages/about.php');
    }

    if (is_page('testimonials')) {
        include('templates/pages/testimonials.php');
    }

    if (is_page('faq')) {
        include('templates/pages/faqs.php');
    }

    if (is_page('contact')) {
        include('templates/pages/contact.php');
    }


    // DETAIL PAGES
    if (is_singular('highlight')) {
        echo "Single highlight";
    }

?>


<?php get_footer() ?>