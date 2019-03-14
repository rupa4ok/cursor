<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:03
 */

namespace App\controllers;

use App\Components\Requests;
use App\Models\Users;

class RegController extends BaseController
{
    private $users;
    
    public function __construct()
    {
        $this->users = new Users();
        parent::__construct();
    }
    
    public function actionIndex()
    {
        $this->users->register();
        include_once 'view/reg.php';
    }
}