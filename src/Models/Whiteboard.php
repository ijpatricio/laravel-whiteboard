<?php

namespace Ijpatricio\LaravelWhiteboard\Models;

use Illuminate\Database\Eloquent\Model;

class Whiteboard extends Model
{
    protected $table = 'laravel_whiteboards';

    protected $guarded = ['id'];

    protected $casts = [
        'data' => 'json',
    ];
}
