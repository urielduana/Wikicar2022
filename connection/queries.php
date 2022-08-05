<?php
include("conexion.php");

class BasicSelect extends Conexion{
    private $askedData;
    private $table;
    private $condition;
    private $result;
    private $query;
    private $connection;

    public function __construct ($askedData, $table, $condition){
        parent::__construct();
        $this -> createSelect($askedData, $table, $condition);
        $this -> executeSelect($this->query);

    }

    public function createSelect($askedData, $table, $condition){
        if($condition == ""){
            $this -> query = "SELECT $askedData FROM  $table";
        }else{
            $this -> query = "SELECT $askedData  FROM  $table WHERE $condition";
        }
    }

    public function executeSelect($query){
        $this -> result = mysqli_query($this->getConexion(),$query);
    }

    public function getBasicSelect(){
        return $this->result;
    }
}


class BasicInsert extends Conexion{
    private $values;
    private $table;
    private $askedValues;
    private $result;
    private $query;
    private $connection;

    public function __construct ($values, $table, $askedValues){
        parent::__construct();
        $this -> createInsert($values, $table, $askedValues);
        $this -> executeInsert($this->query);

    }

    public function createInsert($values, $table, $askedValues){
        if($askedValues == ""){
            $this -> query = "INSERT INTO $table VALUES $values;";
        }else{
            $this -> query = "INSERT INTO $table($askedValues) VALUES $values;";
        }
    }

    public function executeInsert($query){
        $this -> result = mysqli_query($this->getConexion(),$query);
    }

    public function getBasicInsert(){
        return $this->result;
    }

}

class BasicDelete extends Conexion{
    private $table;
    private $conditionAsk;
    private $conditionValue;
    private $result;
    private $query;
    private $connection;

    public function __construct ($table, $conditionAsk, $conditionValue){
        parent::__construct();
        $this -> createDelete($table, $conditionAsk, $conditionValue);
        $this -> executeDelete($this->query);

    }

    public function createDelete( $table, $conditionAsk, $conditionValue){
            $this -> query = "DELETE FROM $table WHERE $conditionAsk $conditionValue;";
        }

    public function executeDelete($query){
        $this -> result = mysqli_query($this->getConexion(),$query);
    }

    public function getBasicDelete(){
        return $this->result;
    }
}

class BasicUpdate extends Conexion{
    private $table;
    private $column;
    private $values;
    private $condition;
    private $query;
    private $result;

    public function __construct ($table, $column, $values, $condition){
        parent::__construct();
        $this -> createUpdate($table, $column, $values, $condition);
        $this -> executeUpdate($this->query);
    }

    public function createUpdate($table, $column, $values, $condition){
        $this -> query = "UPDATE $table SET $column = $values WHERE $condition";
    }
    public function executeUpdate($query){
        $this -> result = mysqli_query($this->getConexion(),$query);
    }
    public function getBasicDelete(){
        return $this->result;
    }
}

class BasicProcedure extends Conexion{
    private $procedure;
    private $values;
    private $query;
    private $result;

    public function __construct ($procedure, $values){
        parent::__construct();
        $this -> createProcedure($procedure, $values);
        $this -> executeProcedure($this->query);
    }

    public function createProcedure($procedure, $values){

        if($values == ''){
            $this -> query = "CALL $procedure();";
        }else{
            $this -> query = "CALL $procedure($values);";
        }
        }
        public function executeProcedure($query){
        $this -> result = mysqli_query($this->getConexion(),$query);
    }
    public function getBasicDelete(){
        return $this->result;
    }
}
?>