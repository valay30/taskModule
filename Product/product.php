<?php
require_once '../database.php';
require_once '../row.php';

class Product extends Row{
    public $tableName = "product";
    public $primaryKey = "product_id";

}