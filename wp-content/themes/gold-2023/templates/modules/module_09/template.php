<?php
    $groupOne = get_sub_field('image_one');
    $groupTwo = get_sub_field('image_two');
    $groupThree = get_sub_field('image_three');

    // $titleOne = $groupOne['title'];
    $imageOne = $groupOne['image']['url'] ?? null;
    $altTextOne = $groupOne['alt_text'] ?? null;
    $hasDescriptionOne = $groupOne['has_description'] ?? null;
    $descriptionOne = $groupOne['description'] ?? null;

    // $titleTwo = $groupTwo['title'];
    $imageTwo = $groupTwo['image']['url'] ?? null;
    $altTextTwo = $groupTwo['alt_text'] ?? null;
    $hasDescriptionTwo = $groupTwo['has_description'] ?? null;
    $descriptionTwo = $groupTwo['description'] ?? null;

    // $titleThree = $groupThree['title'];
    $imageThree = $groupThree['image']['url'] ?? null;
    $altTextThree = $groupThree['alt_text'] ?? null;
    $hasDescriptionThree = $groupThree['has_description'] ?? null;
    $descriptionThree = $groupThree['description'] ?? null;
?>

<module-nine>
    <nav class="navbar">

        <logo class="gold-collective">

            <?php include('wp-content/themes/gold-2023/images/logo.php'); ?>

        </logo>

        <div class="hamburger-menu">
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
        </div>
    </nav>

    <figure class='one'>
        <picture>
            <img src='https://peprojects.dev/images/landscape.jpg' alt='$todo' loading='lazy'>
        </picture>
        <figcaption>
            <p>Example figure 1 caption here.</p>
        </figcaption>
    </figure>

    <!-- replace figure element above with php include below when ready -->
    <?php //include(getFile("templates/partials/figures.php")) ?>

    <p class="landing-copy">We are destination lifestyle wedding photographers creating time capsules of celebrations for couples that are authentic and classic, but hardy typical. Our weddings are filled with candid moments, fun, and dancing - all of the feels. We live for the occasional late night dip!</p>
</module-nine>