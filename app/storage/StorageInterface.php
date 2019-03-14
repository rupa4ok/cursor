<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 20:37
 */

namespace App\Storage;

interface StorageInterface
{
    /**
     * @return UserItem[]
     */
    public function load();
    
    /**
     * @param UserItem[] $items
     * @return mixed
     */
    public function save(array $items);
}
