<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:02
 */

namespace App\controllers;

use App\Components\Requests;
use App\storage\SessionStorage;
use App\Components\Auth;

class IndexController extends BaseController
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
        $this->auth->login($this->request->getPost(), $this->request->getPost());
        include_once 'view/index.php';
    }
}