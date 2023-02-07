<?php

require_once('controller/Router.php');
require 'controller/Controller.php';


$router = new Router();

$router->routeReq();


// $page = $_GET['action'] ?? 'home';
// $controller = new Controller();

// switch ($page) {
//     case 'home':
//         $controller->homePage();
//         break;

//     case 'login':
//         if(!$_POST){
//             require('./view/login/loginPage.php');
//         }else{
//             $user = $controller->login($_POST['login'],$_POST['password']);
//             if($user == false){
//                 require('./view/login/loginPage.php');
//             }else{
//                 $_SESSION['user'] = $_POST['login'];
//                 $_SESSION['role'] = $user['role'];
//                 $_SESSION['email'] = $user['email'];
//                 header("LOCATION: http://localhost:8888/index.php?action=dashboard");
//             }
//         }
//         break;

//     case 'logout':
//         session_unset();
//         session_destroy();

//         $controller->homePage();
//         break;

//     case 'createAccount':
//         if(!$_POST){
//             require('./view/login/createAccountPage.php');
//         }else{
//             $controller->createUser($_POST['login'],$_POST['password'],$_POST['email']);
//         }
//         break;

//     case 'dashboard':
//         if($_SESSION['user'] && $_SESSION['role'] == 'admin'){
//             require('./view/dashboard/dashboard.php');
//         }elseif(isset($_SESSION['user']) && $_SESSION['role'] == 'user'){
//             require('./view/login/loginPage.php');
//         }else{
//             header("LOCATION: http://localhost:8888/index.php?action=login");
//         }
//         break;

//     case 'viewPosts':
//         $posts = $controller->getPosts();
//         require('./view/post/viewPosts.php');
//         break;
//     case 'viewPost':
//         $postID = $_GET['postID'];

//         if($_POST){
//             $content = $_POST['commentContent'];
//             $controller->createComment($postID, $content);
//         }

//         $post = $controller->getPost($postID);
//         $comments = $controller->getCommentsForPost($postID);

//         require('./view/post/singlePost.php');

//         break;

//     case 'updatePost':
//         $postID = $_GET['postID'];

//         if(!$_POST){
//             $post = $controller->getPost($postID);
//         }else{    
//             $controller->updatePost($_POST['postTitle'], $_POST['postChapo'], $_POST['postContent'], $postID);
//             $post = $controller->getPost($postID);            
//         }

//         require('./view/post/updatePost.php');
//         break;

//     case 'deletePost':
//         $postID = $_GET['postID'];
//         $post = $controller->deletePost($postID);

//         require('./view/post/deletePost.php');

//         break;
//     case 'addPost':
//         if(!$_POST){
//             require('./view/post/addPost.php');
//         }else{
//             $controller->createPost($_POST['postTitle'],$_POST['postContent'],$_POST['postChapo']);
//         }
//         break;

//     default:
//         $controller->homePage();
// }