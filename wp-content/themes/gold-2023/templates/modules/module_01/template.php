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
			<p><?= $descriptionOne ?></p>
		</figcaption>
	</figure>

	<figure class='two'>
		<picture>
			<img src='<?= $imageTwo ?>' alt='<?= $altTextTwo ?>' loading='lazy'>
		</picture>

		<figcaption>
			<p><?= $descriptionTwo ?></p>
		</figcaption>
	</figure>

	<figure class='three'>
		<picture>
			<img src='<?= $imageThree ?>' alt='<?= $altTextThree ?>' loading='lazy'>
		</picture>

		<figcaption>
			<p><?= $descriptionThree ?></p>
		</figcaption>
	</figure>
</module-one>