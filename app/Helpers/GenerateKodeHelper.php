<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class GenerateKodeHelper
{
    public static function generate($model, $prefix = 'A', $field = 'kode')
    {
        $latestData = $model::orderByRaw("CAST(SUBSTRING($field, LENGTH('$prefix') + 1) AS UNSIGNED) DESC")->first();

        if (!$latestData) {
            return $prefix . '1';
        }

        $latestCode = $latestData->$field;
        $number = (int) substr($latestCode, strlen($prefix));
        $nextNumber = $number + 1;

        return $prefix . $nextNumber;
    }


    public static function reorder($model, $prefix = 'A', $field = 'kode')
    {
        return DB::transaction(function () use ($model, $prefix, $field) {
            $items = $model::orderByRaw("CAST(SUBSTRING($field, LENGTH('$prefix') + 1) AS UNSIGNED) DESC")->first();

            foreach ($items as $key => $item) {
                $item->update([
                    $field => $prefix . ($key + 1)
                ]);
            }

            return true;
        });
    }
}
