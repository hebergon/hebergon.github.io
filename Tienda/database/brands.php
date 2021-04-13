<?php
    class Marcas{
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
            $result = $this->db->con->query("SELECT * FROM marcas");

            $resultArray = array();

            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }

        //query distinta
        public function especifica($row, $data){
            $result = $this->db->con->query("SELECT * FROM marcas WHERE {$row} = '{$data}'");

            $resultArray = array();

            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
            return $resultArray;
        }

        //reversa
        public function reversa(){
            $result = $this->db->con->query("SELECT * FROM marcas ORDER BY id DESC");

            $resultArray = array();

            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

?>