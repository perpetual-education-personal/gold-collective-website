<module-one class='base-template'>

	<div class='module-text'>
		<h2 class='attention-voice'><?= $heading ?></h2>

		<text-content><?=$intro?></text-content>
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