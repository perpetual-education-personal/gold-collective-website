<?php get_header() ?>

<<<<<<< HEAD
<main class="page-content">


    <?php
=======
<?php include(getFile('loop-variables.php')); ?>


<?php
>>>>>>> ced087c4839c377380d387a843c8b9246f2bb834

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


<?php get_footer() ?>