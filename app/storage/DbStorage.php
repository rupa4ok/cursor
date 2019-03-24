<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 20:56
 */

namespace App\storage;

use PDO;
use PDOException;

class DbStorage implements StorageInterface
{
    private $db_name;
    private $password;
    private $username;
    private $pdo;
    
    public function __construct(array $options)
    {
        $this->db_name = $options['db_name'];
        $this->username = $options['username'];
        $this->password = $options['password'];
        try {
            $this->pdo = new PDO("mysql:host=127.0.0.1; db_name=$this->db_name; charset=utf8", "$this->username", "$this->password");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function load()
    {
        $statment = $this->pdo->prepare('SELECT * FROM s17623.users');
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function save(array $items)
    {
        // TODO: Implement save() method.
    }

}
