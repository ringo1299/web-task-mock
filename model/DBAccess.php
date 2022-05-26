<?php
class DBAccess
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new PDO(
            'mysql:dbname=php;host=127.0.0.1', 
            'axizuser',
            'axiz'
          );
    }

    /**
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * Set the value of pdo
     *
     * @return  self
     */ 
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;

        return $this;
    }
}