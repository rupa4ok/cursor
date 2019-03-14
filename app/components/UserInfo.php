<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 21:00
 */

namespace App\Components;

use App\Models\BaseModels;

class UserInfo extends BaseModels
{
    /**
     * @var UserInfo[]
     */
    protected $userInfo;
    
    public function __construct($userInfo)
    {
        $this->userInfo = $userInfo;
        parent::__construct();
    }
    
    public function getId()
    {
        return $this->userInfo['id'] ?? null;
    }
    
    public function getLogin()
    {
        return $this->userInfo['login'] ?? null;
    }
    
    public function getPassword()
    {
        return $this->userInfo['password'] ?? null;
    }
    
    public function getPasswordConfirm()
    {
        return $this->userInfo['password'] ?? null;
    }
    
    public function getName()
    {
        return $this->userInfo['name'] ?? null;
    }
    
    public function getEmail()
    {
        return $this->userInfo['email'] ?? null;
    }
}