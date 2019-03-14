<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 20:56
 */

namespace App\storage;
Use \SimpleXMLElement;

class XmlStorage implements StorageInterface
{
    private $xml;
    private $file;
    
    public function __construct($file)
    {
        $this->file = $file;
        $this->xml = new SimpleXMLElement($file);
    }
    
    public function load()
    {
        return $this->xml->asXML($this->file);
    }
    
    public function save(array $items)
    {
        return $this->xml->saveXML($this->file);
    }
}