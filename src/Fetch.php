<?php

namespace coccoto\crud;

abstract class Fetch extends DBManager {

    public ? object $stmt = null;

    public function run(string $sql, array $data = null): bool {

        $this->stmt = $this->pdo->prepare($sql);

        if ($data !== null) {
            $this->bind($data);
        }

        return $this->stmt->execute();
    }

    private function bind(array $data): void {

        foreach ($data as $key => $orders) {
            foreach ($orders as $column => $value) {
                $this->branch($column, $value);
            }
        }
    }

    /**
     * @param string|integer $value
     */
    private function branch(string $column, $value): void {

        if (gettype($value) === 'string') {
            $this->stmt->bindValue(':' . $column, $value, \PDO::PARAM_STR);

        } else if (gettype($value) === 'integer') {
            $this->stmt->bindValue(':' . $column, $value, \PDO::PARAM_INT);
        }
    }
}