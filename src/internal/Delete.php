<?php

namespace coccoto\dbmanager\internal;

final class Delete extends Component {

    protected function decorator(string $key, string $column): void {

        $this->pieces[] = $column . '=:' . $column;
    }

    protected function piece(): array {

        return [
            implode(' AND ', $this->pieces),
        ];
    }

    protected function order(string $table, array $pieces): string {

        return "DELETE FROM $table WHERE $pieces[0]";
    }
}