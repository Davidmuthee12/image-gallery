<?php

include "inc/header.inc.php";
include "util/util.php";

?>
	<section class="gallery-grid" aria-label="Gallery images">
		<?php foreach ($images as $filename => $title): ?>
			<article class="gallery-card">
				<a class="gallery-card__link" href="image.php?<?php echo http_build_query(['image' => $filename]); ?>">
					<figure>
						<img src="images/<?= e(rawurlencode($filename)) ?>" alt="<?= e($imageDescription[$filename] ?? '') ?>">
						<figcaption><?= e($title) ?></figcaption>
					</figure>
				</a>
			</article>
		<?php endforeach; ?>
	</section>
<?php include "inc/footer.inc.php"; ?>