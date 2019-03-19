<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 20:37
 */

namespace App\Storage;

use App\Components\UserInfo;

interface StorageInterface
{
    /**
     * @return UserInfo[]
     */
    public function load();
    
    /**
     * @param UserInfo[] $items
     * @return mixed
     */
    public function save(array $items);
}
