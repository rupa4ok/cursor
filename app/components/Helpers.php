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
    public function redirect($uri, $response)
    {
        header("Location: $uri", true, $response);
    }
    
    public static function render($template, $data)
    {
        extract($data, EXTR_SKIP);
        ob_start();
        require ROOT."/view/$template.php";
        return trim(ob_get_clean());
    }
}