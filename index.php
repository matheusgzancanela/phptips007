<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$route = new Router(ROOT);

/**
 * APP
 */
$route->namespace("Source\App");

/**
 * Web
 */
$route->group(null);
$route->get("/", "Web:home");
$route->get("/contato", "Web:contact");

/**
 * ERROR
 */
$route->group("ops");
$route->get("/{errcode}", "Web:error");

/**
 * PROCESS
 */
$route->dispatch();

if ($route->error()) {
  $route->redirect("/ops/{$route->error()}");
}