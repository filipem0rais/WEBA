<?php ob_start(); ?>
<h1><?= $new->title ?></h1>
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title"><?= $new->lead ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $new->category ?></h6>
        <p class="card-text"><?= nl2br($new->content) ?></p>
    </div>
    <div class="card-footer text-muted">
        <?= $new->publishedAt ?>
    </div>
</div>
<div class="comments">

    <?php
    foreach ($comments as $comment) {
        ?>
        <div class="card mt-4">
            <div class="card-body">
                <p class="card-text"><?= $comment->comment ?></p>
            </div>

            <div class="card-footer text-muted">
                <?= $comment->name ?>
            </div>
        </div>

        <?php
    }
    ?>

</div>
<?php
$pageContent = ob_get_clean();

include_once("template.php");
?>

