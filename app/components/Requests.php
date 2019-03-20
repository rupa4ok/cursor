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
        return $this->post ?? [];
    }
    
    public function getRequest(): array
    {
        return $this->get ?? [];
    }
    
    public function requestMethod($method): bool
    {
        return $_SERVER['REQUEST_METHOD'] === $method;
    }
}