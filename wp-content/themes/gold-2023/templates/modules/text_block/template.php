<?php
$textBlock = get_sub_field('generic_wysiwyg');
?>

<?php if (is_page('home')) { ?>

	<style>
		.has-text_block inner-column {
			padding-top: 0;
			padding-bottom: 0;
		}

		.has-text_block section.intro h1:first-of-type {
			padding-bottom: 20px;
			margin-left: -1rem;
			margin-right: -1rem;

		}

		.has-text_block section.intro h1:first-of-type img {
			width: 100%;
		}

		@media(min-width: 700px) {
			.has-text_block section.intro h1:first-of-type {

				margin-left: 0;
				margin-right: 0;
			}

			.has-text_block inner-column {
				padding: 0;

			}

			.has-text_block section.intro h1:not(:first-of-type) {
				padding-left: 1rem;
				padding-right: 1rem;
				max-width: 800px;
			}

		}
	</style>

<?php } ?>

<div class='text_block'>

	<?= $textBlock ?>

</div>