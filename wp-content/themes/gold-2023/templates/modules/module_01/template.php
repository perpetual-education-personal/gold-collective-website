<?php


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

<module-one class='base-template'>

	<div class='module-text'>
		<h2 class='attention-voice'><?= $heading ?></h2>

		<text-content><?= $intro ?></text-content>
	</div>

	<?php //include('figure-copy.php'); ?>


	<?php //include('../figure.php'); ?>
	<?php //include('gold-2023/templates/partials/figure.php'); ?>
	<?php //include('templates/partials/figure.php'); ?>

	<?php include(getFile("templates/partials/figure.php")) ?>




</module-one>