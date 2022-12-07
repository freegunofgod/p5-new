<?php $title = "update post"; ?>
<?php ob_start(); ?>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/rendu/index.php/?action=dashboard">Accueil</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/rendu/index.php/?action=addPost">Ajouter un article</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/rendu/index.php/?action=viewPosts">Voir les article</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#3">Commentaires</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#4">Mon profil</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#5">Se déconnecter</a>
            </div>

        </div>
        <!-- Page content wrapper-->
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="mt-4">Add Post</h1>
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="post-title" class="form-label">Post title</label>
                        <input type="text" class="form-control" id="post-title" name="postTitle" aria-describedby="post-title-help">
                        <div id="post-title-help" class="form-text">Don't use an existing one !</div>
                    </div>
                    <div class="mb-3">
                        <label for="post-content-input" class="form-label">Content</label>
                        <input type="text" name="postContent" class="form-control" id="post-content-input">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="post-chapo-input">Chapô</label>
                        <input type="text" name="postChapo"  class="form-control" id="post-chapo-input">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <?php if (isset($error)): ?>
              
              <div class="alert alert-danger" role="alert">
              <span>Erreur : </span><span><?= $error ?></span>
              </div>
      
            <?php elseif (isset($success)): ?>
                <div class="alert alert-success" role="alert">
                    <span>Post ID : <?= $postID ?></span><br> 
                    <span>Message : <?= $success ?></span><br> 
                    <a href="index.php/?action=viewPost&postID=<?= $postID ?>" class="btn-back-index"><i class="fal fa-hand-point-right"></i>Voir l'article</a>
                </div>
            <?php endif ?>
            
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('./view/layout.php') ?>