<?php
/**
 * Created by PhpStorm.
 * User: rupack
 * Date: 14.3.19
 * Time: 16.01
 */

use App\Components\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    public function setUp(): void
    {

        parent::setUp();
    }
    
    /**
     * @dataProvider
     */
    public function testLogin(): array
    {
    }
    
    public function testPasswordEquals(): void
    {
        $userData = $this->getUsersInfo();
        $password = $userData['empty']['password'];
        $password_confirm = $userData['empty']['password_confirm'];
        $this->assertEquals($password, $password_confirm);
    }
    
    public function getUsersInfo(): array
    {
        return [
            'empty' => [
                'login' => 'Test1',
                'password' => 'test123',
                'password_confirm' => 'test123'
            ],
        ];
    }
}
