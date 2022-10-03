<?php
// Reminder: "get_" returns, "the_" echoes

$heading = get_sub_field('heading');
$intro = get_sub_field('intro');

$link = get_sub_field('cta');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';


$imageOne = get_sub_field('image_1')['url'] ?? null;
$altTextOne = get_sub_field('alttext_1');
$captionOne = get_sub_field('caption_1');

$imageTwo = get_sub_field('image_2')['url'] ?? null;
$altTextTwo = get_sub_field('alttext_2');
$captionTwo = get_sub_field('caption_2');

$imageThree = get_sub_field('image_3')['url'] ?? null;
$altTextThree = get_sub_field('alttext_3');
$captionThree = get_sub_field('caption_3');
