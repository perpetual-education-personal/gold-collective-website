<?php
// Reminder: "get_" returns, "the_" echoes

$heading = get_sub_field('heading');
$intro = get_sub_field('intro');

$imageOne = get_sub_field('image_1')['url'] ?? null;
$altTextOne = get_sub_field('alttext_1');
$captionOne = get_sub_field('caption_1');

$imageTwo = get_sub_field('image_2')['url'] ?? null;
$altTextTwo = get_sub_field('alttext_2');
$captionTwo = get_sub_field('caption_2');

$imageThree = get_sub_field('image_3')['url'] ?? null;
$altTextThree = get_sub_field('alttext_3');
$captionThree = get_sub_field('caption_3');
