<?php
include "util/util.php";
include "inc/header.inc.php";

?>

<?php if (!empty($_GET['image']) && isset($images[$_GET['image']])): ?>
    <?php $filename = $_GET['image']; ?>
    <article class="image-detail">
        <a class="back-link" href="index.php">&larr; All images</a>
        <h2><?php echo e($images[$filename]); ?></h2>
        <figure class="image-detail__figure">
            <img src="./images/<?php echo e(rawurlencode($filename)); ?>" alt="<?php echo e($images[$filename]); ?>">
            <figcaption><?php echo str_replace("\n", "<br/>", e($imageDescription[$filename] ?? '')); ?></figcaption>
        </figure>
    </article>
<?php else: ?>
    <div class="notice">
        this image could not be loaded!!
    </div>    
<?php endif; ?>

<?php include "inc/footer.inc.php"; ?>