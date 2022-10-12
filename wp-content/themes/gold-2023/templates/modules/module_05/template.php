<?php

$groupOne = get_sub_field('image_one');
$groupTwo = get_sub_field('image_two');
$groupThree = get_sub_field('image_three');

// $titleOne = $groupOne['title'];
$imageOne = $groupOne['image']['url'] ?? null;
$altTextOne = $groupOne['alt_text'] ?? null;
$descriptionOne = $groupOne['description'] ?? null;

// $titleTwo = $groupTwo['title'];
$imageTwo = $groupTwo['image']['url'] ?? null;
$altTextTwo = $groupTwo['alt_text'] ?? null;
$descriptionTwo = $groupTwo['description'] ?? null;

// $titleThree = $groupThree['title'];
$imageThree = $groupThree['image']['url'] ?? null;
$altTextThree = $groupThree['alt_text'] ?? null;
$descriptionThree = $groupThree['description'] ?? null;
?>

<module-five class='base-template'>

    <scroll-container>
        <ul>
            <li>
                <figure class='one'>
                    <picture>
                        <img src='<?= $imageOne ?>' alt='<?= $altTextOne ?>' loading='lazy'>
                    </picture>
                    <?php if ($descriptionOne) { ?>
                        <figcaption>
                            <?= $descriptionOne ?>
                        </figcaption>
                    <?php } ?>
                </figure>
            </li>

            <li>
                <figure class='two'>
                    <picture>
                        <img src='<?= $imageTwo ?>' alt='<?= $altTextTwo ?>' loading='lazy'>
                    </picture>
                    <?php if ($descriptionTwo) { ?>
                        <figcaption>
                            <?= $descriptionTwo ?>
                        </figcaption>
                    <?php } ?>
                </figure>
            </li>

            <li>
                <figure class='three'>
                    <picture>
                        <img src='<?= $imageThree ?>' alt='<?= $altTextThree ?>' loading='lazy'>
                    </picture>
                    <?php if ($descriptionThree) { ?>
                        <figcaption>
                            <?= $descriptionThree ?>
                        </figcaption>
                    <?php } ?>
                </figure>
            </li>
        </ul>
    </scroll-container>

</module-five>