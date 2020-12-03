<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'src',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
