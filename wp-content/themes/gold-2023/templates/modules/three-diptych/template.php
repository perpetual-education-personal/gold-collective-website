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

<thing-module class="base-template">
	<div class="intro">
		<h2 class="attention-voice"><?= $heading ?></h2>

		<text-content><?= $intro ?></text-content>
	</div>

	<?php include(getFile("templates/partials/figures.php")) ?>

</thing-module>