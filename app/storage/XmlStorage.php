<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 20:56
 */

namespace App\storage;

class XmlStorage implements StorageInterface
{
    private $xml;
    private $file;
    
    public function __construct($file)
    {
        $this->file = $file;
//        $this->xml = new SimpleXMLElement($file);
    }
    
    public function load()
    {
        return [
            'login' => '324',
            'name' => 'Test',
            'email' => '2@mail.ru'
        ];
    }
    
    public function save(array $items)
    {
//        return $this->xml->saveXML($this->file);
    }
}
