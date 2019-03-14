<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 21:18
 */

namespace App\Components;

use App\Models\BaseModels;
use App\Storage\StorageInterface;

class Reg extends BaseModels
{
    /**
     * @var UserInfo[]
     */
    protected $items;
    /**
     * @var StorageInterface
     */
    protected $storage;
    
    public function __construct()
    {
        parent::__construct();
    }

}