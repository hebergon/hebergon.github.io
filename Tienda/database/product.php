<?php
    class Product{
        public $db = null;

        //constructor
        public function __construct(DBController $db){
            if(!isset($db->con)){
                return null;
            }
            $this->db = $db;
        }

        //fetch
        public function getData(){
            $result = $this->db->con->query("SELECT * FROM productos");

            $resultArray = array();

            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }

        //query distinta
        public function especifica($row, $data){
            $result = $this->db->con->query("SELECT * FROM productos WHERE {$row} = '{$data}'");

            $resultArray = array();

            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }

?>