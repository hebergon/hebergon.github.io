<?php

class DBController{
    //Propiedades de la conexion
    protected $host = '127.0.0.1';
    protected $user = 'root';
    protected $password = '';
    protected $database = "pruebahyp";

    //conexion
    public $con = null;

    //constructor
    public function __construct(){
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->con->connect_error){
            echo "Fail".$this->con->connect_error;
        }
        
    }

    //destructor
    public function __destruct(){
        $this->closeConnection();
    }
    
    //cerrar conexion
    protected function closeConnection(){
        if(!$this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }
}


?>