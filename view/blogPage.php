<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="container px-5">
            <h1 class="masthead-heading mb-0">Blog</h1>
            <h2 class="masthead-subheading mb-0">Avec un routeur qui marche</h2>
            <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">J'suis le best</a>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>

<section class="blog-area section">
    <div class="container">
        <div class="row">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php foreach ($articles as $article): ?>        
                        <div class="post-preview">
                            <a href="post.html">
                                <h2 class="post-title"><?= $article->title()?></h2>
                                <h3 class="post-subtitle"><?= $article->chapo()?></h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!"><?= $article->author()?></a>
                                posted on <?= $article->creationDate()?>
                            </p>
                        </div>
                        <hr class="my-4" />
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>