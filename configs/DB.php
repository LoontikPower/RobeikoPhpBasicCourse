<?php

class DB
{
    protected static PDO $instance;

    public static function connect(): PDO
    {
        if(!isset(self::$instance)){
            self::$instance=new PDO();
        }
        return self::$instance;
    }

}