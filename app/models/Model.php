<?php
    
    namespace app\models;

    use app\models\Connection;

    abstract class Model{

        protected $connection;

        public function __construct(){

            $this->connection = Connection::connect();
        }

        public function all(){

            $sql = "SELECT * FROM {$this->table}";
            $list = $this->connection->prepare($sql);
            $list->execute();

            return $list->fetchAll();

        }

        public function find($field, $value){

                
            $sql = "SELECT * FROM {$this->table} WHERE {$field} = ?";
            $list = $this->connection->prepare($sql);
            $list -> bindValue(1, $value);
            $list->execute();

            return $list->fetch();

        }

        public function delete(){

            $sql =  "DELETE FROM {$this->table} WHERE $field = ?";

            $delete = $this->connection->prepare($sql);
            $delete -> bindValue(1, $value);
            $delete->execute();
            
            return $delete->rowCount();

        }


    }

?>
