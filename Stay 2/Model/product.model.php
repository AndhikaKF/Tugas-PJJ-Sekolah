<?php

class ProductModel extends Connection
{
    protected $id;
    protected $name;
    protected $price;
    protected $stock;

    protected function findAll()
    {
        $sql = "SELECT * FROM products";
        $result = $this->connect()->query($sql); // call func dari default mysql
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $product[] = $data;
            }
        }
        return $product;
    }

    protected function findOne($id)
    {
        $sql = "SELECT * FROM products WHERE id = " . $id;
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $product[] = $data;
            }
        }
        return $product;
    }
}
?>