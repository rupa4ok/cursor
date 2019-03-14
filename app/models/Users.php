<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:28
 */

namespace App\Models;

use App\Components\Requests;

class Users extends BaseModels
{
    /**
     * @var Requests
     */
    private $requests;
    private $password;
    
    public function __construct()
    {
        $this->requests = new Requests();
        parent::__construct();
    }
    
    public function register()
    {
        $userData = $this->requests->getPost();
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
}