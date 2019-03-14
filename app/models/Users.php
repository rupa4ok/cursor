<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:28
 */

namespace App\Models;

use App\Components\Requests;
use App\Components\UserInfo;

class Users extends BaseModels
{
    /**
     * @var Requests
     */
    private $requests;
    
    public function __construct()
    {
        $this->requests = new Requests();
        parent::__construct();
    }
    
    public function login()
    {
    
    }
    
    public function register()
    {
        $userPostInfo = new UserInfo($this->requests->getPost());
        $userXmlInfo = new UserInfo($this->xmlStorage->load());
        $validate = $this->emailValidate($userPostInfo->getEmail(), $userXmlInfo->getEmail());
        
        
        $errors = [];
//        if () {
//            $errors[] = 'Данный пользователь уже существует';
//        }
//        if (empty($errors)) {
//            $this->xmlStorage->save($userData);
//            $this->sessionStorage->save($userData);
//            $this->cookiesStorage->save($userData);
//        }
        
    }
    
    public function emailValidate($emailForm, $emailStorage): void
    {
        echo $emailForm . '-' . $emailStorage;
    }
    
}