<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">Dashboard</div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard">Home</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/addPost">Add post</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/viewPosts">View posts</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/viewComments">Comments</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/viewUsers">Users</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/userProfile">My profile</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/logout">Logout</a>
        </div>
    </div>
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
            <h1 class="mt-4">Espace d'administration</h1>
            <p>Hello <?= $_SESSION['login']; ?><p>
                Bienvenue sur l'administration du site.
            </p>
        </div>
    </div>
</div>