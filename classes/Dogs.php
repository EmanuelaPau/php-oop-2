<?php
class Dog
{
    private static $icon = '"fa-solid fa-dog"';
    public function callIcon()
    {
        return self::$icon;
    }
}
?>