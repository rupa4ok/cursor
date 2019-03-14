<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:50
 */

namespace App\controllers;

use App\Components\Requests;
use App\storage\CookiesStorage;
use App\storage\SessionStorage;
use App\storage\XmlStorage;

abstract class BaseController
{
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
    
    protected $key;
    protected $file;
    
    public function __construct()
    {
        $this->request = new Requests();
        $this->sessionStorage = new SessionStorage($this->key);
        $this->cookiesStorage = new CookiesStorage();
        $this->file = file_get_contents(DB_XML);
        $this->xmlStorage = new XmlStorage($this->file);
    }
    
}