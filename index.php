<?php
require_once("vendor/autoload.php");
require_once("function.php");

use Psr\Http\Message\REsponseInterface AS Response;
use Psr\Http\Message\ServerRequestInterface AS Request;

use \Slim\App;
use \Kawasaki\Page;
use \Kawasaki\Model\Item;

$config = [
	"settings"=>[
		"displayErrorDetails"=>true
	]
];

$app = new App($config);

$app->get('/', function(Request $request, Response $response, array $args){

	$search = (isset($_GET["search"])) ? $_GET["search"] : "";

	if($search !== ""){

		Item::search($search);

	}

	$itens = Item::listAll();

	$page = new Page();

	$page->setTpl("index", [
		"itens"=>$itens,
		"search"=>$search
	]);

});

$app->get('/create', function(Request $request, Response $response, array $args){

	$page = new Page();

	$page->setTpl("itens-create");

});

$app->post('/create', function(Request $request, Response $response, array $args){

	$item = new Item();

	$item->setData($_POST);

	$item->save();

	header("Location: /");

	exit;

});

$app->get('/update/{iditem}', function(Request $request, Response $response, array $args){

	$item = new Item();

	$item->get((int)$args["iditem"]);

	$page = new Page();

	$page->setTpl("itens-update", [
		"item"=>$item->getValues()
	]);

});

$app->post('/update/{iditem}', function(Request $request, Response $response, array $args){

	$item = new Item();

	$item->get((int)$args["iditem"]);

	$item->setData($_POST);

	$item->save();

	header("Location: /");

	exit;

});

$app->get('/delete/{iditem}', function(Request $request, Response $response, array $args){

	$item = new Item();

	$item->get((int)$args["iditem"]);

	$item->delete();

	header("Location: /");

	exit;
	
});

$app->run();
?>