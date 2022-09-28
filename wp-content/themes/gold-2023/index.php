<?php get_header() ?>

<main class="page-content">


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


    // DETAIL PAGES

    if (is_singular('highlight')) {
        echo "Single highlight";
    }

    ?>

</main>

<?php get_footer() ?>