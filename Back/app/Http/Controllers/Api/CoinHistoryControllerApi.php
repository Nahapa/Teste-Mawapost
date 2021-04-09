<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CoinHistoryResource;
use App\Services\CoinHistoryService;
use Illuminate\Http\Request;

class CoinHistoryControllerApi extends Controller
{
    private $coinHistoryService;

    public function __construct()
    {
        $this->coinHistoryService = new CoinHistoryService();
    }

    public function index()
    {
        return CoinHistoryResource::collection($this->coinHistoryService->getCoinHistoriesAll());
    }

    public function store(Request $request)
    {
        return new CoinHistoryResource($this->coinHistoryService->newCoinHistory($request->all()));
    }

    public function destroy($id)
    {
        return $this->coinHistoryService->deleteCoinHistoryById($id);
    }
}
