<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:02
 */

namespace App\controllers;

use App\Models\Users;

class AuthController extends BaseController
{
    private $users;
    
    public function __construct()
    {
        $this->users = new Users();
        parent::__construct();
    }
    
    public function actionIndex()
    {
        $errors[] = $this->users->register();
        include_once 'view/personal.php';
    }
}
