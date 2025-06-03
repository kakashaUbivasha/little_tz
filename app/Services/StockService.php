<?php

namespace App\Services;
use Illuminate\Http\Request;
class StockService
{
    public function filterStock($query, Request $request)
    {
        if ($request->filled('dateFrom') && $request->filled('dateTo')) {
            $query->whereDate('date', '=', $request->input('dateFrom'));
        }
        $data = $query->paginate($request->query('limit', 500));
        return $data;
    }
}
