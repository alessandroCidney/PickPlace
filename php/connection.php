<?php 
    
    class Database {
        private $connection;

        // O construtor inicia a conexão com o banco de dados

        public function __construct() {
            try {
                
                $this->connection = new PDO("mysql:host=localhost;dbname=", "root", "");

            } catch (Exception $e) {
                
                $e->getMessage();
                
                die();
            }
        }

        public function data_list($kwhValue) {
            $sqlCommand = "select * from kwh_data where kwh=".$kwhValue;

            $dataArray = [];
            
            foreach ($this->connection->query($sqlCommand) as $key => $value) {
                
                array_push($dataArray, $value);

            }

            return $dataArray;
        }

        public function data_insert($kwhValue, $systemValue, $pdoze, $pvinteEQuatro, $ptrintaESeis, $pquarentaEOito, $psessenta, $psetentaEDois, $poitentaEQuatro) {
            $sqlCommandOne = "delete from kwh_data where kwh=?";

            $prepareOne = $this->connection->prepare($sqlCommandOne);

            $prepareOne->bindParam(1, $kwhValue);

            $prepareOne->execute();

            $sqlCommandTwo = "insert into kwh_data(kwh, system_value, value_one, value_two, value_three, value_four, value_five, value_six, value_seven) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $prepareTwo = $this->connection->prepare($sqlCommandTwo);

            $prepareTwo->bindParam(1, $kwhValue);
            $prepareTwo->bindParam(2, $systemValue);
            $prepareTwo->bindParam(3, $pdoze);
            $prepareTwo->bindParam(4, $pvinteEQuatro);
            $prepareTwo->bindParam(5, $ptrintaESeis);
            $prepareTwo->bindParam(6, $pquarentaEOito);
            $prepareTwo->bindParam(7, $psessenta);
            $prepareTwo->bindParam(8, $psetentaEDois);
            $prepareTwo->bindParam(9, $poitentaEQuatro);

            $prepareTwo->execute();

            return $prepareTwo->rowCount();
        }

        public function data_remove($kwhValue) {
            $sqlCommand = "delete from kwh_data where kwh=?";

            $prepare = $this->connection->prepare($sqlCommand);

            $prepare->bindParam(1, $kwhValue);

            $prepare->execute();
            
            return $prepare->rowCount();
        }
    }

?>