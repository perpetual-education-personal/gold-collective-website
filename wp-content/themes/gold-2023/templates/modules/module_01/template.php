<?php


$heading = get_sub_field('heading');
$intro = get_sub_field('intro');

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

<module-one class='base-template'>

	<div class='module-text'>
		<h2 class='attention-voice'><?= $heading ?></h2>

		<text-content><?= $intro ?></text-content>
	</div>

	<figure class='one'>
		<picture>
			<img src='<?= $imageOne ?>' alt='<?= $altTextOne ?>' loading='lazy'>
		</picture>

		<figcaption>
			<?= $descriptionOne ?>
		</figcaption>
	</figure>

	<figure class='two'>
		<picture>
			<img src='<?= $imageTwo ?>' alt='<?= $altTextTwo ?>' loading='lazy'>
		</picture>

		<figcaption>
			<?= $descriptionTwo ?>
		</figcaption>
	</figure>

	<figure class='three'>
		<picture>
			<img src='<?= $imageThree ?>' alt='<?= $altTextThree ?>' loading='lazy'>
		</picture>

		<figcaption>
			<?= $descriptionThree ?>
		</figcaption>
	</figure>
</module-one>