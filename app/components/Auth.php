<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 21:18
 */

namespace App\Components;

use App\Storage\StorageInterface;

class Auth
{
    /**
     * @var UserInfo[]
     */
    protected $items;
    /**
     * @var StorageInterface
     */
    protected $storage;
    protected $xmlBd;
    
    public function login($storage)
    {
        return $this->storage = $storage;
    }
}
