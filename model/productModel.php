<?php

    require 'db/dbhelper.php';
    class Product extends DBHelper{

        private $table = 'tbl_product';
        private $fields = array(
            'prod_name',
            'prod_price'
        );

        function __construct(){
            return DBHelper::__construct();
        }

        function addProd($data){
            return DBHelper::insertRecord($data,$this->fields,$this->table);
        }

        function getAllProd(){
            return DBHelper::getAllRecord($this->table);
        }

    }