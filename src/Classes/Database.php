<?php


/**
 * Cette classe utilise PDO afin d'effectuer des opérations sur la BDD
 */

class Database
{
    /**
     * Instance de PDO
     * @var PDO
     */
    private $pdo;

    /**
     * Creer une instance de PDO
     */
    public function connect():void
    {
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname=catalogue',
            'root',
            null,
            [
                PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8mb4"
            ]
        );
    }

    /**
     * @param string $sql
     * @param string $className
     * @return array|null
     */
    public function query(string $sql, ?string $className='null'): ?array
    {
        $result = $this->pdo->query($sql);
        if (empty($className)){
            return $result->fetchAll();
        }else{
            return $result->fetchAll(PDO::FETCH_CLASS,$className);
        }
    }

    /**
     * Requete SQL pour la création, la modification, l'update et la suppression
     * @param string $sql
     * @return int
     */
    public function exec(string $sql):int
    {
        return $this->pdo->exec($sql);
    }
}