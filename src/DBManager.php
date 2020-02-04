<?php

namespace coccoto\anemane;

abstract class DBManager {

    protected ? object $pdo = null;
    private static ? array $connInfo = null;

    public function __construct() {

        $this->connect($this->connInfo(), $this->option());
    }

    private function connect(array $connInfo, array $option): void {

        try {
            $this->pdo = new \PDO($connInfo['dsn'], $connInfo['user'], $connInfo['pass'], $option);
            return;

        } catch (\PDOException $error) {
            return;
        }
    }

    private function connInfo(): array {

        $host = self::$connInfo['host'];
        $dbname = self::$connInfo['dbname'];

        $connInfo = [
            'dsn' => 'mysql:host=' . $host . ';dbname=' . $dbname,
            'user' => self::$connInfo['user'],
            'pass' => self::$connInfo['pass'],
        ];

        return $connInfo;
    }

    private function option(): array {

        $option = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ];

        return $option;
    }

    public static function setConnInfo(array $connInfo): void {

        self::$connInfo = $connInfo;
    }
}