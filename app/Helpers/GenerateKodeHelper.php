<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class GenerateKodeHelper
{
    public static function generate($model, $prefix = 'A', $field = 'kode')
    {
        $latestKode = $model::orderBy($field, 'desc')->first();

        if (!$latestKode) {
            return $prefix . '1';
        }

        $lastNumber = (int) substr($latestKode->$field, strlen($prefix));
        $nextNumber = $lastNumber + 1;

        return $prefix . $nextNumber;
    }

    public static function reorder($model, $prefix = 'A', $field = 'kode')
    {
        return DB::transaction(function () use ($model, $prefix, $field) {
            $items = $model::orderBy($field)->get();

            foreach ($items as $key => $item) {
                $item->update([
                    $field => $prefix . ($key + 1)
                ]);
            }

            return true;
        });
    }
}
