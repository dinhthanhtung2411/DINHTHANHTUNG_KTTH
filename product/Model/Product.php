<?php
namespace Model;

class Product
{
    protected $id;
    protected $product_name;
    protected $product_line;
    protected $product_price;
    protected $product_number;
    protected $date_created;
    protected $description_of_the_item;

    public function __construct($product_name,$product_line,$product_price,$product_number,$date_created)
    {
        $this->product_name = $product_name;
        $this->product_line = $product_line;
        $this->product_price = $product_price;
        $this->product_number =$product_number;
        $this->date_created = $date_created;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @return mixed
     */
    public function getProductLine()
    {
        return $this->product_line;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->product_price;
    }

    /**
     * @return mixed
     */
    public function getProductNumber()
    {
        return $this->product_number;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * @return mixed
     */
    public function getDescriptionOfTheItem()
    {
        return $this->description_of_the_item;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @param mixed $description_of_the_item
     */
    public function setDescriptionOfTheItem($description_of_the_item)
    {
        $this->description_of_the_item = $description_of_the_item;
    }
}
