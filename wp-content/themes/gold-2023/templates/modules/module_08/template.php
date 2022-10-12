<?php
$heading = get_sub_field('heading');

$link = get_sub_field('link');
if ($link) {
    $link_url = $link['url'];
    $link_title = $link['title'];
}

$groupOne = get_sub_field('image_one');
// $titleOne = $groupOne['title'];
$imageOne = $groupOne['image']['url'] ?? null;
$altTextOne = $groupOne['alt_text'] ?? null;
$descriptionOne = $groupOne['description'] ?? null;

?>
<module-eight class="base-template">

    <div class="intro">
        <h2 class='attention-voice'><?= $heading ?></h2>
    </div>

    <figure class='one'>
        <picture>
            <img src='<?= $imageOne ?>' alt='<?= $altTextOne ?>' loading='lazy'>
        </picture>

    </figure>

    <figcaption>
        <?= $descriptionOne ?>
    </figcaption>


    <div class="copy">
        <text-content><?= $intro ?></text-content>
        <cta>
            <a href="<?= $link_url ?>"><?= $link_title ?></a>
        </cta>
    </div>



</module-eight>