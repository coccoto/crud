<?php

namespace coccoto\anemane\internal;

final class Update extends Component {

    protected function decorator(string $key, string $column): void {

        $this->pieces[$key][] = $column . '=:' . $column;
    }

    protected function piece(): array {

        return [
            implode(',', $this->pieces['set']),
            implode(' AND ', $this->pieces['where']),
        ];
    }

    protected function order(string $table, array $pieces): string {

        return "UPDATE $table SET $pieces[0] WHERE $pieces[1]";
    }
}