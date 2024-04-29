<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public static function find($id)
    {
    }

    public function gamebody()
    {
        return $this->belongsTo(Gamebody::class);
    }

}
