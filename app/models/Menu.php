<?php
require_once "config/database.php";

class Menu {

    public static function all() {
        $db = Database::connect();
        return $db->query("SELECT * FROM menu_items ORDER BY id DESC")
                  ->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function byCategory($category) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM menu_items WHERE category = ?");
        $stmt->execute([$category]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::connect();
        $stmt = $db->prepare(
            "INSERT INTO menu_items (name, price, category, description)
             VALUES (?, ?, ?, ?)"
        );
        return $stmt->execute($data);
    }

    public static function find($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM menu_items WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($id, $data) {
        $db = Database::connect();
        $stmt = $db->prepare(
            "UPDATE menu_items
             SET name=?, price=?, category=?, description=?
             WHERE id=?"
        );
        return $stmt->execute([...$data, $id]);
    }

    public static function delete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM menu_items WHERE id = ?");
        return $stmt->execute([$id]);
    }
}


