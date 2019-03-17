<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:03
 */

namespace App\controllers;

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
        $errors = '';
        if ($this->request->requestMethod('POST')) {
            $errors = $this->users->register();
        }
        
        include_once ROOT.'/view/reg.php';
    }
}