<?php
// Reminder: "get_" returns, "the_" echoes
$link = get_sub_field('link');
if ($link) {
    $link_url = $link['url'];
    $link_title = $link['title'];
}

$heading = get_sub_field('heading');
$intro = get_sub_field('intro');

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

<module-ten class='base-template'>
    <h2 class='attention-voice'><?= $heading ?></h2>

    <scroll-container>
       <?php include(getFile("templates/partials/figures.php")) ?>
    </scroll-container>
    <div>
        <text-content><?= $intro ?></text-content>

        <a href="<?= $link_url ?>"><?= $link_title ?></a>
    </div>

</module-ten>