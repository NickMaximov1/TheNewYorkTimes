<?php
declare(strict_types=1);

namespace App;

abstract class Model
{
    public const TABLE = '';

    public $id;

    //К методу можно обращаться без создания нового объекта класса, не должно быть this!!!
    public static function findAll(): array
    {
        $db = new Db();
        $sql = 'SELECT * FROM `' . static::TABLE . '` ORDER BY `id` DESC';
        return $db->query(sql: $sql,
            class: static::class
        );
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM `' . static::TABLE . "` WHERE `id` = :id";
        $data = $db->query(sql: $sql,
            class: static::class,
            data: [':id' => $id]);
        return $data ? $data[0] : null;
    }


    public function insert()
    {
        $fields = get_object_vars($this);
        $columns = [];
        $data = [];

        foreach ($fields as $name => $value) {
            if ('id' === $name) {
                continue;
            }
            $columns[] = $name;
            $data[':' . $name] = $value;
        }

        $sql = '
INSERT INTO ' . static::TABLE . '
(' . implode(',', $columns) . ') 
VALUES (' . implode(',', array_keys($data)) . ')';

        $db = new Db();
        $db->execute($sql, $data);
        $this->id = $db->getLastId();
    }
}