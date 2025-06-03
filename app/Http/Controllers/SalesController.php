<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest;
use App\Http\Resources\SaleResource;
use App\Models\Sale;
use App\Services\ManualService;
use Illuminate\Http\Request;

class SalesController extends Controller
{
        public function index(DataRequest $request, ManualService $manualService)
        {
            $query = Sale::query();
            try{
                $sales = $manualService->filtersDate($query, $request);
                return SaleResource::collection($sales);
            }catch (\Exception $exception){
                return response()->json([ 'message' => $exception->getMessage(),], 500);
            }
        }
}
