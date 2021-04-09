<?php

namespace App\Services;

use App\Models\CoinHistory;
use Illuminate\Database\Eloquent\Collection;

class CoinHistoryService
{
    public function getCoinHistoriesAll(): Collection
    {
        return CoinHistory::all();
    }

    public function newCoinHistory(array $data): CoinHistory
    {
        return CoinHistory::create([
            'name'          => $data['name'],
            'code'          => $data['code'],
            'high'          => $data['high'],
            'low'           => $data['low'],
            'bid'           => $data['bid'],
            'ask'           => $data['ask'],
            'create_date'   => $data['create_date'],
        ]);
    }

    public function deleteCoinHistoryById(int $id): void
    {
        CoinHistory::find($id)->delete();
    }
}
