<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameBody extends Model
{
    use HasFactory;


    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function requirement()
    {
        return $this->belongsTo(Requirement::class);
    }

}
