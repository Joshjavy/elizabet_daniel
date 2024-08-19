<?php

namespace Core;

use App\Config\Config;
use PDO;

class Model
{
    public $db = null;
    private $statement;
    private $error;
    public function __construct()
    {
        try {
            self::openDatabaseConnection();
            print_r(self::openDatabaseConnection());
        } catch (\PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    private function openDatabaseConnection()
    {
        $dsn = sprintf("mysql:host=%s:%s;dbname=%s;charset=%s", Config::DB_HOST, Config::DB_PORT, Config::DB_NAME, Config::DB_CHARSET);
        $options  = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];
        $this->db = new PDO($dsn, Config::DB_USER, Config::DB_PASS, $options);
    }

    public function query($consulta)
    {
        $this->statement = $this->db->prepare($consulta);
    }

    public function bind($parametro, $valor, $tipo = null)
    {
        if (is_null($tipo)) {
            switch (true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;

                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;

                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;

                default:
                    $tipo = PDO::PARAM_STR;
                    break;
            }
        }
        $this->statement->bindValue($parametro, $valor, $tipo);
    }

    //Ejecuta la consulta
    public function execute()
    {
        return $this->statement->execute();
    }

    //Obtener los registros de la consulta
    public function fetchAll()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
        // return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    //Obtener los registros de la consulta
    public function fetchAll_assoc()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    //Obtener un solo registro
    public function fetch()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
        //return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    public function fetch_assoc()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    //Obtener cantidad de filas con el método rowCount()
    public function rowCount()
    {
        return $this->statement->rowCount();
    }

    public function beginTransaction()
    {
        return $this->db->beginTransaction();
    }

    public function commit()
    {
        return $this->db->commit();
    }

    public function rollBack()
    {
        return $this->db->rollBack();
    }

    public function lastInsertId()
    {
        return $this->db->lastInsertId();
    }

    public function closeCursor()
    {
        return $this->statement->closeCursor();
    }
}
