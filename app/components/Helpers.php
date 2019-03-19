<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 17.03.2019
 * Time: 21:11
 */

namespace App\components;


class Helpers
{
    static public function redirect($uri, $response)
    {
        header("Location: $uri", true, $response);
    }
    
    static public function render($template, $data)
    {
        extract($data);
        ob_start();
        require ROOT."/view/$template.php";
        return trim(ob_get_clean());
    }
}