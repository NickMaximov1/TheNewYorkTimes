<?php
declare(strict_types=1);

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        try {
            $config = new Config();
            $configData = $config->getData();
            $this->dbh = new \PDO(
                'mysql:host=' . $configData['host'] . ';dbname=' . $configData['dbname'],
                $configData['user'],
                $configData['password']
            );
        } catch (\PDOException $error){
            throw new DbException('', 'ERR_CONNECT_DB');
        }

    }

    /**
     * @param string $sql
     * @param array $data
     * @param string $class
     * @return array
     * @throws DbException
     */
    public function query(string $sql, string $class, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return !$sth->execute($data) ? throw new DbException($sql, 'The request can`t be done!') :
            $sth->fetchAll(\PDO::FETCH_CLASS, $class);

    }


    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }


    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}