<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 17.03.2019
 * Time: 21:15
 */

namespace App\components;

use App\controllers\BaseController;

class Validate extends BaseController
{
    /**
     * @var Requests
     */
    private $userPostInfo;
    
    /**
     * @var UserInfo
     */
    private $userXmlInfo;
    
    public function __construct()
    {
        parent::__construct();
        parent::DB_XML;
        $this->userPostInfo = new UserInfo($this->request->getPost());
        $this->userXmlInfo = new UserInfo($this->xmlStorage->load());
    }
    
    /**
     * Проверка данных, полученных из запроса и находящихся в хранилище на существование
     *
     * @return array|string
     */
    public function checkValid()
    {
        $validate = $this->getValidationData();
        empty($validate) ? $validates = 'Пользователь существует' :
            $validates = array_shift($validate);
        return $validates;
    }
    
    /**
     * Получение массива с ошибками регистрации
     *
     * @return array
     */
    public function getValidationData(): array
    {
        $validate = [];
        $validate[] = $this->passwordValidate($this->userPostInfo->getPassword(), $this->userPostInfo->getPasswordConfirm());
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
        return ($loginForm === $loginStorage) ? 'Данный Login занят' : null;
    }
    
    /**
     * @param $emailForm
     * @param $emailStorage
     * @return string|null
     */
    public function emailValidate($emailForm, $emailStorage)
    {
        return ($emailForm === $emailStorage) ? 'Данный Email занят' : null;
    }
    
    /**
     * @param $password
     * @param $passworsConfirm
     * @return null|string
     */
    public function passwordValidate($password, $passworsConfirm)
    {
        return ($password !== $passworsConfirm) ? 'Пароли не совпадают' : null;
    }
}