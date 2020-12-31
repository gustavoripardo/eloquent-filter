<?php

namespace LaravelLegends\EloquentFilter\Rules;

class DateMin implements Searchable
{
    public function __invoke($query, $field, $value)
    {
        $query->whereDate($field, '>=', $value);
    }
}