<?php
require_once "app/models/Menu.php";

class MenuController {

    // READ (Home + Category Filter)
    public function index() {
        if (isset($_GET['category'])) {
            $items = Menu::byCategory($_GET['category']);
        } else {
            $items = Menu::all();
        }

        require "app/views/menu/index.php";
    }

    // SHOW CREATE FORM + SAVE ITEM
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Menu::create([
                $_POST['name'],
                $_POST['price'],
                $_POST['category'],
                $_POST['description']
            ]);

            header("Location: index.php");
            exit;
        }

        require "app/views/menu/create.php";
    }

    // SHOW EDIT FORM + UPDATE ITEM
    public function edit() {
        $item = Menu::find($_GET['id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Menu::update($_GET['id'], [
                $_POST['name'],
                $_POST['price'],
                $_POST['category'],
                $_POST['description']
            ]);

            header("Location: index.php");
            exit;
        }

        require "app/views/menu/edit.php";
    }

    // DELETE ITEM
    public function delete() {
        Menu::delete($_GET['id']);
        header("Location: index.php");
        exit;
    }
}
