<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CoinService
{
    public function getCoinsAll()
    {
        return array_values(Http::get("https://economia.awesomeapi.com.br/json/all")->json());
    }
}
