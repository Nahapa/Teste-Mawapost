<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CoinResource;
use App\Services\CoinService;

class CoinControllerApi extends Controller
{
    private $coinService;

    public function __construct()
    {
        $this->coinService = new CoinService();
    }

    public function index()
    {
        return CoinResource::collection($this->coinService->getCoinsAll());
    }
}
