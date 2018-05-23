<?php


namespace App;

class Db
{

    private $dbh;
    private $settings;

    public function __construct()
    {
        $this->settings = require __DIR__ . '/settings.php';

        if (explode('.',  $_SERVER['HTTP_HOST'])[1] == 'local'){
            $connectionSettings = $this->settings['DbDev'];
        }else{
            $connectionSettings = $this->settings['DbProduction'];
        }

        $this->dbh = new \PDO(
            'mysql:dbname=' .  $connectionSettings['base'] . ';host=' . $connectionSettings['host'] . ';charset=utf8', $connectionSettings['user'], $connectionSettings['password']
        );
    }

    public function execute(string $sql, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }

    public function query(string $sql, array $data = [], string $class = \stdClass::class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

}