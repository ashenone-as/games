<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded =
        [

             'id'

        ];

    public $timestamps = false;

    public function gamebody()
    {
        return $this->belongsTo(GameBody::class);
    }
}
