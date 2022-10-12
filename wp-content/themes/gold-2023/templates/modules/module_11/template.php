<?php
$heading = get_sub_field('heading');
$intro = get_sub_field('intro');

$textBlock = get_sub_field('generic_wysiwyg');

$groupOne = get_sub_field('image_one');
$groupTwo = get_sub_field('image_two');

// $titleOne = $groupOne['title'];
$imageOne = $groupOne['image']['url'] ?? null;
$altTextOne = $groupOne['alt_text'] ?? null;
$descriptionOne = $groupOne['description'] ?? null;

// $titleTwo = $groupTwo['title'];
$imageTwo = $groupTwo['image']['url'] ?? null;
$altTextTwo = $groupTwo['alt_text'] ?? null;
$descriptionTwo = $groupTwo['description'] ?? null;
?>

<module-eleven class="base-template">
	<div class="module-text">
		<h2><?= $heading ?></h2>
		<text-content><?= $intro ?></text-content>
	</div>
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
</module-eleven>