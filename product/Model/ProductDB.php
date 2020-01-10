<?php

namespace Model;
class ProductDB
{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($product)
    {
        $sql = "INSERT INTO products (product_name,product_line,product_price,product_number,date_created,description_of_the_item) value (:product_name,:product_line,:product_price,:product_number,:date_created,:description_of_the_item)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':product_name', $product->getProductName());
        $stmt->bindParam(':product_line', $product->getProductLine());
        $stmt->bindParam(':product_price', $product->getProductPrice());
        $stmt->bindParam(':product_number', $product->getProductNumber());
        $stmt->bindParam(':date_created', $product->getDateCreated());
        $stmt->bindParam(':description_of_the_item', $product->getDescriptionOfTheItem());
        $stmt->execute();
    }

    public function getAll()
    {
        $sql = "SELECT*FROM products";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['product_name'], $item['product_line'], $item['product_number'], $item['date_created'], $item['description_of_the_item']);
            $product->setId($item['id']);
            array_push($arr, $product);
        }
        return $arr;
    }

    public function get($id)
    {
        $sql = "SELECT*FROM products WHERE id = $id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $user = new Product($result['product_name'], $result['product_line'], $result['product_number'], $result['date_created'], $result['description_of_the_item']);
        $user->setId($id);
        return $user;

    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id =$id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }
}
