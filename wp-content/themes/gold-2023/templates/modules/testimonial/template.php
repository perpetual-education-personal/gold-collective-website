<?php
//Testimonial Variables//
$review = get_sub_field('review');
$source = get_sub_field('source');

?>

<div class="testimonial">

	<p class="review" ?><?= $review ?></p>

	<p class="source"><?= $source ?></p>

</div>