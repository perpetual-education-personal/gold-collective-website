<?php get_header() ?>

<main class="page-content">

    <?php
    if (is_page('home')) {
        include('templates/pages/home.php');
    }

    if (is_page('highlights')) {
        include('templates/pages/highlights.php');
    }

    if (is_singular('highlight')) {
        echo "Single highlight";
    }

    // if (is_page('artists')) {
    //     include('templates/pages/artists.php');
    // }

    // if (is_singular('artist')) {
    //     echo "Single album";
    // }

    if (is_404()) {
        include('templates/pages/page-not-found.php');
    }

    ?>

</main>

<?php get_footer() ?>