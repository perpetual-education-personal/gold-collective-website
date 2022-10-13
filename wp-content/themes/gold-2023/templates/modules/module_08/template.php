<?php
$heading = get_sub_field('heading');

$link = get_sub_field('link');
if ($link) {
    $link_url = $link['url'];
    $link_title = $link['title'];
}

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


<module-eight class="base-template">

    <div class="intro">
        <h2 class='attention-voice'><?= $heading ?></h2>
    </div>

   <?php include(getFile("templates/partials/figures.php")) ?>


    <div class="copy">
        <text-content><?= $intro ?></text-content>
        <cta>
            <a href="<?= $link_url ?>"><?= $link_title ?></a>
        </cta>
    </div>



</module-eight>