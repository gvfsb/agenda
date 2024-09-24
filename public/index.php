<?php 

use Slim\Factory\AppFactory;

// use Selective\BasePath\BasePathMiddleware;

require '../vendor/autoload.php';

define('BASE_URL', "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?'));

$app = AppFactory::create();

// Add Slim routing middleware
$app->addRoutingMiddleware();

// Set the base path to run the app in a subdirectory.
// This path is used in urlFor().
// $app->setBasePath("");

$app->addErrorMiddleware(true, true, true);

// Define app routes

require '../app/routes/Routes.php';

// $app->get('/criar',  function(Request $resquest, Response $response){

//     $page = new Page();

//     $page->setTpl("create");

//     return $response;

// });

// Run app
$app->run();