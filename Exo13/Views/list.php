<?php ob_start(); ?>
                    <h1>Le journal des bonnes nouvelles</h1>
                    <?php
                        foreach($news as $new) {
                    ?>
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title"><?= $new->title ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $new->category ?></h6>
                                <p class="card-text"><?= $new->lead ?></p>
                                <a href="index.php?action=details&id=<?= $new->id ?>" class="btn btn-primary">Lire la suite</a>
                            </div>

                            <div class="card-footer text-muted">
                                <?= $new->publishedAt ?>
                            </div>
                        </div>
                    <?php
                        }
                    ?>


<?php
$pageContent = ob_get_clean();

include_once("template.php");
?>

