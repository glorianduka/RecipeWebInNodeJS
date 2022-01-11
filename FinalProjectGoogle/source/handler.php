<?php
ini_set('allow_url_fopen',1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.php';
        break;
    case '/index.php':
        require 'index.php';
        break;
    case '/index':
        require 'index.php';
        break;
    case '/addConfirm.php':
        require 'addConfirm.php';
        break;
    case '/addConfirm':
        require 'addConfirm.php';
        break;
    case '/addRecipe.php':
        require 'addRecipe.php';
        break;
    case '/addRecipe':
        require 'addRecipe.php';
        break;
    case '/delete.php':
        require 'delete.php';
        break;
    case '/delete':
        require 'delete.php';
        break;
    case '/details.php':
        require 'details.php';
        break;
    case '/details':
        require 'details.php';
        break;
    case '/editConfirm.php':
        require 'editConfirm.php';
        break;
    case '/editConfirm':
        require 'editConfirm.php';
        break;
    case '/editRecipe.php':
        require 'editRecipe.php';
        break;
    case '/editRecipe':
        require 'editRecipe.php';
        break;
    case '/favorite.php':
        require 'favorite.php';
        break;
    case '/favorite':
        require 'favorite.php';
        break;
    case '/login.php':
        require 'login.php';
        break;
    case '/login':
        require 'login.php';
        break;
    case '/logout.php':
        require 'logout.php';
        break;
    case '/logout':
        require 'logout.php';
        break;
    case '/profile.php':
        require 'profile.php';
        break;
    case '/profile':
        require 'profile.php';
        break;
    case '/profileAjaxBackend.php':
        require 'profileAjaxBackend.php';
        break;
    case '/profileAjaxBackend':
        require 'profileAjaxBackend.php';
        break;
    case '/register.php':
        require 'register.php';
        break;
    case '/register':
        require 'register.php';
        break;
    case '/registerConfirm.php':
        require 'registerConfirm.php';
        break;
    case '/registerConfirm':
        require 'registerConfirm.php';
        break;
    case '/results.php':
        require 'results.php';
        break;
    case '/results':
        require 'results.php';
        break;
    case '/search.php':
        require 'search.php';
        break;
    case '/search':
        require 'search.php';
        break;
    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        echo "error handler.php";        
        exit('Not Found');
}

?>