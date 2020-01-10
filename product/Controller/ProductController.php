<?php

namespace Controller;
use Model\DBconnect;
use Model\Product;
use Model\ProductDB;

class ProductController
{
    protected $userDB;

    public function __construct()
    {
        $dbname = "mysql:host=127.0.0.1;dbname=Productmanager;charset=utf8";
        $username = "root";
        $password = "@Tung123";
        $db = new DBconnect($dbname, $username, $password);
        $this->userDB = new ProductDB($db->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            include "view/add.php";
        } else {
            $product_name = $_POST['name'];
            $product_line = $_POST['line'];
            $product_price = $_POST['price'];
            $product_number = $_POST['number'];
            $date_created = $_POST['date'];
            $description_of_the_item = $_POST['descriptiom'];

            $product = new Product($product_name, $product_line, $product_price, $product_number, $date_created, $description_of_the_item);
            $this->userDB->create($product);
            $message = "product created";
            include "view/add.php";
        }
    }

    public function index()
    {
        $users = $this->userDB->getAll();
        include "view/List.php";
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->userDB->get($id);
            include "view/Delete.php";
        } else {
            $id = $_POST['id'];
            $this->userDB->delete($id);

        }
    }
}


