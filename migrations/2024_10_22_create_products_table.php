<?php

class CreateProductsTable{
    public function up(){
        return "CREATE TABLE products(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        price DECIMAL(10,2) NOT NULL,
        description TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
    }

    public function down(){
        return "DROP TABLE products";
    }
}