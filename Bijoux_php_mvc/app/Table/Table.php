<?php

namespace App\Table;

use App\App;

class Table
{

    protected static $table;
    private static function getTable()
    {
        if (static::$table === null) {
            $class_name = explode('\\', get_called_class());
            static::$table = strtolower(end($class_name) . 's');
        }

        return static::$table;
    }

    public static function query($statement, $attributes = null, $one = false)
    {

        if ($attributes) {

            return App::getDb()->prepare($statement, $attributes, get_called_class(), $one);
        } else {
            return App::getDb()->query($statement, get_called_class(), $one);
        }
    }


    public static function find($id)
    {
        return App::getDb()->prepare("SELECT *FROM   WHERE id=?    " . static::getTable() . "    ", [$id], get_called_class(), true);
    }
    public static function all()
    {
        return App::getDb()->query("SELECT *FROM  " . static::getTable() . "", get_called_class());
    }

    public function  __get($Key)
    {
        $method = 'get' . ucfirst($Key);
        $this->$Key = $this->$method();
        return $this->$Key;
    }
}
