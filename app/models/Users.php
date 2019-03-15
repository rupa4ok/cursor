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
    private $userPostInfo;
    private $userXmlInfo;
    
    public function __construct()
    {
        parent::__construct();
        $this->userPostInfo = new UserInfo($this->request->getPost());
        $this->userXmlInfo = new UserInfo($this->xmlStorage->load());
    }
    
    public function login()
    {
    
    }
    
    /**
     * Запись пользователя в хранилище
     */
    public function register()
    {
//        print_r($this->xmlStorage->load());
        echo $this->checkValid();
    }
    
    /**
     * Проверка данных, полученных из запроса и находящихся в хранилище на существование
     *
     * @return array|string
     */
    public function checkValid()
    {
        $validate = $this->getValidationData();
        empty($validate) ? $validate = 'Пользователь существует' : $validate = 'Пользователь не найден';
        return $validate;
    }
    
    /**
     * Получение данных, из запроса и находящихся в хранилище
     *
     * @return array
     */
    public function getValidationData(): array
    {
        $validate = [];
        $validate[] = $this->loginValidate($this->userPostInfo->getLogin(), $this->userXmlInfo->getLogin());
        $validate[] = $this->emailValidate($this->userPostInfo->getEmail(), $this->userXmlInfo->getEmail());
        return $validate;
    }
    
    /**
     * @param $loginForm
     * @param $loginStorage
     * @return string|null
     */
    public function loginValidate($loginForm, $loginStorage)
    {
        return ($loginForm === $loginStorage) ?
            $errors = 'Данный Login занят' : null;
    }
    
    /**
     * @param $emailForm
     * @param $emailStorage
     * @return string|null
     */
    public function emailValidate($emailForm, $emailStorage)
    {
        return ($emailForm === $emailStorage) ?
            $errors = 'Данный Email занят' : null;
    }
}