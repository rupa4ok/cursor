<?php
/**
 * Created by PhpStorm.
 * User: rupack
 * Date: 21.3.19
 * Time: 16.00
 */

namespace App\controllers;

use App\components\Helpers;
use App\Components\Requests;
use App\Components\Auth;

class ObjectController extends BaseController
{
    /**
     * @var Auth
     */
    private $auth;
    
    /**
     * @var Requests
     */
    
    public function __construct()
    {
        $this->auth = new Auth();
        parent::__construct();
    }
    
    public function actionMain()
    {
        return Helpers::render('object', ['login' => '']);
    }
    
    public function delete()
    {
    
    }
}