<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 17.03.2019
 * Time: 15:31
 */

use App\Components\UserInfo;
use PHPUnit\Framework\TestCase;

class UserInfoTest extends TestCase
{
    public $userInfo;
    
    public function setUp(): void
    {
        $this->userInfo = new UserInfo($this->setUserInfo());
        parent::setUp();
    }
    
    public function testGetId()
    {
        $id = $this->setUserInfo()['id'];
        $this->assertEquals($id, $this->userInfo['id']);
    }
    
    public function testGetName()
    {
        $name = $this->setUserInfo()['name'];
        $this->assertEquals($name, $this->userInfo['name']);
    }
    
    public function testGetPassword()
    {
    
    }
    
    public function testGetPasswordConfirm()
    {
    
    }
    
    public function testGetEmail()
    {
    
    }
    
    public function testGetLogin()
    {
    
    }
    
    
    public function setUserInfo()
    {
        return [
            'id' => 3,
            'name' => 'TestUser4',
            'password' => '12345',
            'password_confirm' => '12345',
            'email' => 'test@mail.ru',
            'login' => 'Test4'
        ];
    }
}
