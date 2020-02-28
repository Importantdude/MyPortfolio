<?php

namespace Controllers;
// this product is stored in folder Core

// using delegates we connecting to main class "Connect"

class Product extends Connect
{
    public $id;
    public $SKU;
    public $Name;
    public $Price;
    public $Type;
    public $Value;

    /**
     * collecting everything from db
     *
     * @return false|\PDOStatement
     */
    public function getProduct()
    {
        $sql = "SELECT * FROM product";
        return $this->connect()->query($sql);
        //query function realise request
    }

    /**
     *Check if user entered correct value
     */
    public function isWrong()
    {
        $res = '';
        if ($this->Name === '') {
            $res = "Name is empty";
        } elseif (($this->Price === '') && (!is_numeric($this->Price))) {
            $res = "Please provide correct price";
        } elseif ($this->SKU === '') {
            $res = "SKU is empty";
        } elseif ($this->Type === 'Type Switcher') {
            $res = "Choose type";
        } elseif (($this->Value === '') && (!is_numeric($this->Value))) {
            $res = "Please provide correct value";
        }
        return $res;
    }

    /**
     *add product to Db
     */
    public function addItem()
    {
        $sql = "INSERT INTO product (Name, Price, SKU, Type, Value) VALUE('$this->Name','$this->Price','$this->SKU','$this->Type','$this->Value')";
        $this->connect()->query($sql);
    }

    /**
     *remove 1 from db
     */
    public function delete()
    {
        $this->connect()->query('DELETE FROM product where id=' . $this->id);
    }

    /**
     *which to remove
     */
    public function specialDelete()
    {
        foreach ($_POST['del'] as $key => $value) {
            $this->id = $key;
            $this->delete();
        }
    }

    /**
     *delete all records from DB
     */
    public function deleteAll()
    {
        $this->connect()->query('DELETE FROM product');
    }

    /**
     * @return false|\PDOStatement
     */
    public function getProductType()
    {
        $sql = "SELECT * FROM prvalue";

        return $this->connect()->query($sql);
    }

    /**
     * @param $row
     * find prod type
     */
    public function compareType($row)
    {
        echo $row['SKU'] . '<br>';
        echo $row['Name'] . "<br>";
        echo number_format($row['Price'], 2) . "$<br>";

        $productTypeList = $this->getProductType();
        while ($rowType = $productTypeList->fetch()) {
            if ($row['Type'] === $rowType['Type']) {
                echo $rowType['dimension'] . "  " . $row['Value'];
                echo $rowType['Extension'];

                break;
            }
        }
    }

    /**
     * @param $product
     * user add product
     */
    public function addProduct($product)
    {
        $product->Name = $_POST['Name'];
        $product->Price = $_POST['Price'];
        $product->SKU = $_POST['SKU'];
        $product->Type = $_POST['TO'];
        $this->addType($product);
    }

    /**
     * @param $product
     * user add product type
     */
    public function addType($product)
    {
        switch ($product->Type) {
            case "DVD":
                $product->Value = $_POST['DVD'];
                break;
            case "Book":
                $product->Value = $_POST['Book'];
                break;
            case "Furniture":
                $product->Value = $_POST['Value1'] . "x" . $_POST['Value2'] . "x" . $_POST['Value3'];
                break;
        }
    }
}

