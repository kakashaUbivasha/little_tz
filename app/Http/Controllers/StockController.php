<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Http\Resources\StockResource;
use App\Models\Stock;
use App\Services\StockService;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(StockRequest $request, StockService $stockService)
    {
        $query = Stock::query();
        try{
            $sales = $stockService->filterStock($query, $request);
            return StockResource::collection($sales);
        }catch (\Exception $exception){
            return response()->json([ 'message' => $exception->getMessage(),], 500);
        }
    }
}
