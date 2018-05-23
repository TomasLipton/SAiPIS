<?php

namespace App;

abstract class Model
{
    public static function findAll()
    {

        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            [],
            static::class
        );
    }

    public static function findById($id)
    {
        $db = new Db();
        $result = $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id=:id',
            [':id' => $id],
            static::class
        )[0];

        if (empty($result)) {
            return false;
        } else {
            return $result;
        }
    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':' . $k] = $v;
        }

        $sql = '
INSERT INTO ' . static::TABLE . '
(' . implode(',', $columns) . ')
VALUES
(' . implode(',', array_keys($values)) . ')
        ';
        $db = new Db();

        $db->execute($sql, $values);
    }

    public static function findOneByColumn($column, $value)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE ' . $column . '=:value';
        $res = $db->query($sql, [':value' => $value], static::class);
        if (empty($res)) {
            return false;
        } else {
            return $res[0];
        }
    }

    public static function findByColumn($column, $value)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE ' . $column . '=:value';
        $res = $db->query($sql, [':value' => $value], static::class);
        if (empty($res)) {
            return false;
        } else {
            return $res;
        }
    }

    protected function update()
    {
        $cols = [];
        $data = [];
        foreach ($this as $k => $v) {
            $data[':' . $k] = $v;
            if ('id' == $k) {
                continue;
            }
            $cols[] = $k . '=:' . $k;
        }
        $sql = '
        UPDATE ' . static::TABLE . '
        SET ' . implode(', ', $cols) . '
        WHERE id=:id 
        ';
        $db = new Db();
        $db->execute($sql, $data);
    }

    public function save()
    {
        if (!isset($this->id)) {

            $this->insert();
        } else {
            $this->update();
        }
        return $this->id;
    }


    public function delete()
    {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = :id';
        $db = new Db();
        $db->execute($sql, array('id' => $this->id));
    }

}