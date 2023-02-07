<post class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h1><?= $post[0]->title() ?></h1>
                <p><?= $post[0]->content() ?></p>
                <p>Placeholder text by
                <a href="http://spaceipsum.com/"><?= $post[0]->author() ?></a></br>
                posted on <p><?= $post[0]->creationDate() ?>
                <h2 class="mt-4">List of Comments</h1>
                <?php foreach ($comments as $key => $value) {
                    echo($value->id);
                    echo('<br><br>');
                    echo($value->authorID);
                    echo('<br><br>');
                    echo($value->postID);
                    echo('<br><br>');
                    echo($value->date_creation);
                    echo('<br><br>');
                    echo($value->content);
                }?>
                </p>
            </div>
        </div>
    </div>
</post>