<?php

namespace App\Database;

use PDO;

class AdapterSQLite implements AdapterInterface {
  
    private $dbfile = __DIR__ . "/database.sqlite";

    private $strConnection = "sqlite:";

    private $connection = null;

    public function open() {

        try {

            $this->connection = new PDO($this->strConnection . $this->dbfile);       
        
        } catch(Expection $e) {
            die("Database error: " . $e->getMessage());
        }

    }

    public function close() {
        $this->connection = null;
    }

    public function get() {
        if ( $this->connection === null ) {
            $this->connection->open();
        }
        return $this->connection;
    }

}