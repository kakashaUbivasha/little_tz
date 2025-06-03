<?php

namespace App\Services;
use Illuminate\Http\Request;
class ManualService
{
    public function filtersDate($query, Request $request)
    {
        if ($request->filled('dateFrom') && $request->filled('dateTo')) {
            $query->whereBetween('date', [$request->dateFrom, $request->dateTo]);
        }
        $data = $query->paginate($request->query('limit', 500));
        return $data;
    }
}
