<?php 

class Database {
    private string $database;
    private string $servername;
    private string $username;
    private string $password; 

    public function __construct(string $servername, string $database, string $username, string $password) {
        $this->servername = $servername;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }

    public function connect() {
        try {
            $conn = new PDO
                ("mysql:host=$this->servername; 
                dbname=$this->database", 
                $this->username, 
                $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } 
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    } 
}

?>