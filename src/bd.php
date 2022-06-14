<?php
NAMESPACE ITEC\PRESENCIAL\DAW\BD;
use PDO;
use PDOException;

    class bd{
        private string $host = "localhost";
        private string $user = "root";
        private string $pass = "1234";
        private string $bd = "Database Project";
        private string $port = "3306";
        private string $charset = "utf8";
        
    public function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "1234";
        $this->bd = "Database Project";
        $this->port = "3306";
        $this->charset = "utf8";
    }
    
    public function Select( $query = "" , $params = [] ){	
        try{		
            $stmt = $this->executeStatement( $query , $params );		
            $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);				
            $stmt->close();		
            return $result;		
        }catch(\Exception $e){
            throw New \Exception( $e->getMessage() );
        }	
        return false;
    }

    private function executeStatement( $query = "" , $params = [] ){	
        try{		
            $stmt = $this->connection->prepare( $query );		
            if($stmt === false) {
                throw New \Exception("Unable to do prepared statement: " . $query);
            }		
            if( $params ){
                call_user_func_array(array($stmt, 'bind_param'), $params );				
            }		
            $stmt->execute();		
            return $stmt;		
        }catch(\Exception $e){
            throw New \Exception( $e->getMessage() );
        }
	
    }
}

    try {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->bd;port=$this->port;charset=$this->charset", $this->user, $this->pass);
        echo "Conexion exitosa to $bd at $host";
    } catch (PDOException $pe) {
        die ("No puede conectarse a $bd :" . $pe->getMessage());
    }
?>