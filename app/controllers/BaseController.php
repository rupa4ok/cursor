<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:50
 */

namespace App\controllers;

use App\components\Helpers;
use App\Components\Requests;
use App\storage\CookiesStorage;
use App\storage\SessionStorage;
use App\storage\XmlStorage;

abstract class BaseController
{
    const DB_XML = '/resource/xml/bd.php';
    const DB_CONFIG = "mysql:host=localhost; dbname=vseojkt; charset=utf8', 'test', 'password";
    
    /**
     * @var Requests
     */
    protected $request;
    
    /**
     * @var SessionStorage
     */
    protected $sessionStorage;
    
    /**
     * @var CookiesStorage
     */
    protected $cookiesStorage;
    
    /**
     * @var XmlStorage
     */
    protected $xmlStorage;
    
    protected $helpers;
    
    protected $key;
    protected $file;
    
    public function __construct()
    {
        $this->request = new Requests();
        $this->sessionStorage = new SessionStorage($this->key);
        $this->cookiesStorage = new CookiesStorage();
//        $this->file = file_get_contents('test');
        $this->xmlStorage = new XmlStorage($this->file);
    }
    
}