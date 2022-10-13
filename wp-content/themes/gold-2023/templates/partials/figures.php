<?php if($imageOne) { ?>

	<figure class='one'>
		<picture>
			<img src='<?= $imageOne ?>' alt='<?= $altTextOne ?>' loading='lazy'>
		</picture>

		<?php if($hasDescriptionOne) { ?>
			<figcaption>
				<?= $descriptionOne ?>
			</figcaption>
		<?php } ?>

	</figure>

<?php } ?>

<?php if($imageTwo) { ?>

	<figure class='two'>
		<picture>
			<img src='<?= $imageTwo ?>' alt='<?= $altTextTwo ?>' loading='lazy'>
		</picture>

		<?php if($hasDescriptionTwo) { ?>
			<figcaption>
				<?= $descriptionTwo ?>
			</figcaption>
		<?php } ?>

	</figure>

<?php } ?>

<?php if($imageThree) { ?>

	<figure class='three'>
		<picture>
			<img src='<?= $imageThree ?>' alt='<?= $altTextThree ?>' loading='lazy'>
		</picture>

		<?php if($hasDescriptionThree) { ?>
			<figcaption>
				<?= $descriptionThree ?>
			</figcaption>
		<?php } ?>

	</figure>

<?php } ?>