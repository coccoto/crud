<?php

namespace coccoto\dbmanager;

use coccoto\filereader as filereader;

abstract class DBManager {

    private ? object $fileReader = null;
    protected ? object $pdo = null;
    private ? array $connInfo = null;

    public function __construct() {

        $this->fileReader = new filereader\FileReader();

        $this->push();
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

    private function push(): void {

        $files = $this->fileReader->search(__DIR__ . '/../conf/*');
        $this->connInfo = $files['connInfo'];
    }

    private function connInfo(): array {

        $host = $this->connInfo['host'];
        $dbname = $this->connInfo['dbname'];

        $connInfo = [
            'dsn' => 'mysql:host=' . $host . ';dbname=' . $dbname,
            'user' => $this->connInfo['user'],
            'pass' => $this->connInfo['pass'],
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
}