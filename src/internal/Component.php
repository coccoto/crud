<?php

namespace coccoto\anemane\internal;

abstract class Component {

    protected ? array $pieces = null;

    public function create(string $table, array $data): string {

        $this->setPiece($data);
        return $this->order($table, $this->piece());
    }

    private function setPiece(array $data): void {

        foreach ($data as $key => $orders) {
            foreach ($orders as $column => $value) {
                $this->decorator($key, $column, $value);
            }
        }
    }
}