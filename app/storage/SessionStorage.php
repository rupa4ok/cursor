<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 20:54
 */

namespace App\storage;

class SessionStorage implements StorageInterface
{
    private $key;
    
    public function __construct($key)
    {
        $this->key = $key;
    }
    
    public function load()
    {
        return isset($_SESSION[$this->key]) ? unserialize($_SESSION[$this->key]) : [];
    }
    
    public function save(array $items)
    {
        $_SESSION[$this->key] = serialize($items);
    }
}