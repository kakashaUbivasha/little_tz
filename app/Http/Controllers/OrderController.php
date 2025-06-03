<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Services\ManualService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(DataRequest $request, ManualService $manualService)
    {
        $query = Order::query();
        try{
            $sales = $manualService->filtersDate($query, $request);
            return OrderResource::collection($sales);
        }catch (\Exception $exception){
            return response()->json([ 'message' => $exception->getMessage(),], 500);
        }
    }
}
