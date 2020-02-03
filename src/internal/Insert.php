<?php

namespace coccoto\dbmanager\internal;

final class Insert extends Component {

    protected function decorator(string $key, string $column): void {

        $this->pieces['columns'][] = $column;
        $this->pieces['bind'][] = ':' . $column;
    }

    protected function piece(): array {

        return [
            implode(',', $this->pieces['columns']),
            implode(',', $this->pieces['bind']),
        ];
    }

    protected function order(string $table, array $pieces): string {

        return "INSERT INTO $table ($pieces[0]) VALUES ($pieces[1])";
    }
}