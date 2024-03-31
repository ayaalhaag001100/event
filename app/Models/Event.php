<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'user_id',
        'place_id',
        'status_id',
        'name',
        'additions',
        'nameOnTheCard',
        'music',
    ];

    public function events()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
