<section>
    <h2>Commentaires</h2>

    <?php
    $i = 1;
    var_dump($comments);
    foreach ($comments as $comment) { ?>
    <div class="comment-author">
            <?= $comment['author_id']; ?>
        </div>
        <div class="comment-content">
            <?= $comment['content']; ?>
        </div>     
    <?php } ?>
</section>
