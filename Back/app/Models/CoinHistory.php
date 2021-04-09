<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoinHistory extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;
    protected $fillable = ['name', 'code', 'high', 'low', 'bid', 'ask', 'create_date'];
}
