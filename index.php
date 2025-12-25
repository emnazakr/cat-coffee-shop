<?php
require "app/controllers/MenuController.php";

$controller = new MenuController();
$action = $_GET['action'] ?? 'index';

if ($action == "create") $controller->create();
elseif ($action == "edit") $controller->edit();
elseif ($action == "delete") $controller->delete();
else $controller->index();
