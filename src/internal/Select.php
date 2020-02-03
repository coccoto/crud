<?php

namespace coccoto\dbmanager\internal;

final class Select extends Component {

    private bool $isset = false;

    public function isset(array $data): void {

        if (empty($data['where'])) {
            $this->isset = false;

        } else {
            $this->isset = true;
        }
    }

    public function format(array $data): ? array {

        if (! $this->isset) {
            return null;

        } else {
            $formatData['where'] = $data['where'];
            return $formatData;
        }
    }

    protected function decorator(string $key, string $column, string $value): void {

        if ($key === 'columns') {
            $this->pieces['columns'][] = $value;

        } else if ($key === 'where') {
            $this->pieces['where'][] = $column . '=:' . $column;
        }
    }

    protected function piece(): array {

        $pieces[0] = implode(',', $this->pieces['columns']);

        if ($this->isset) {
            $pieces[1] = implode(' AND ', $this->pieces['where']);
        }

        return $pieces;
    }

    protected function order(string $table, array $pieces): string {

        if (! $this->isset) {
            return "SELECT $pieces[0] FROM $table";

        } else {
            return "SELECT $pieces[0] FROM $table WHERE $pieces[1]";
        }
    }
}