<?php
class Database {
    public static function connect() {
        return new PDO(
            "mysql:host=localhost;port=3306;dbname=cat_coffee_shop;charset=utf8",
            "root",
            ""
        );
    }
}
