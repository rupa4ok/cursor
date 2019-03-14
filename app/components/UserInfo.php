<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 21:00
 */

namespace App\Components;

class UserInfo
{
    private $id;
    private $login;
    private $email;
    private $name;
    
    public function __construct($id, $count, $price, $login)
    {
        $this->id = $id;
        $this->count = $count;
        $this->price = $price;
        $this->login = $login;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getLogin()
    {
        return $this->login;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getCost()
    {
        return $this->count * $this->price;
    }
}