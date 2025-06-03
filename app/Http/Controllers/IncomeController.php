<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest;
use App\Http\Resources\IncomeResource;
use App\Models\Income;
use App\Services\ManualService;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index(DataRequest $request, ManualService  $manualService)
    {
        $query = Income::query();
        try{
            $sales = $manualService->filtersDate($query, $request);
            return IncomeResource::collection($sales);
        }catch (\Exception $exception){
            return response()->json([ 'message' => $exception->getMessage(),], 500);
        }
    }
}
