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
    public function __construct()
    {
        $this->connect();
    }
    
    public function load()
    {
        // TODO: Implement load() method.
    }
    
    public function save(array $items)
    {
        // TODO: Implement save() method.
    }
    
    public function connect()
    {
        try {
            $pdo = new PDO(DB_CONFIG);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}