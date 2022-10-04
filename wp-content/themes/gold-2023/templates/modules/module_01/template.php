<module-one class='base-template'>

	<div class='module-text'>
		<h2 class='attention-voice'><?= $heading ?></h2>

		<p class="intro"><?= $intro ?></p>
	</div>

	<figure class='one'>
		<picture>
			<img src='<?= $imageOne ?>' alt='<?= $altTextOne ?>' loading='lazy'>
		</picture>

		<figcaption>
			<p><?= $captionOne ?></p>
		</figcaption>
	</figure>

	<figure class='two'>
		<picture>
			<img src='<?= $imageTwo ?>' alt='<?= $altTextTwo ?>' loading='lazy'>
		</picture>

		<figcaption>
			<p><?= $captionTwo ?></p>
		</figcaption>
	</figure>

	<figure class='three'>
		<picture>
			<img src='<?= $imageThree ?>' alt='<?= $altTextThree ?>' loading='lazy'>
		</picture>

		<figcaption>
			<p><?= $captionThree ?></p>
		</figcaption>
	</figure>
</module-one>