<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:45
 */

namespace App\Components;

class Requests
{
    private $post;
    private $get;
    
    public function __construct()
    {
        $this->post = $_POST;
        $this->get = $_GET;
    }
    
    public function getPost(): array
    {
        return isset($_POST) ? $_POST : [];
    }
    
    public function getRequest()
    {
        return isset($_GET) ? $_GET : [];
    }
}