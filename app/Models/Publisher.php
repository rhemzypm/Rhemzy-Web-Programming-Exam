<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{
    use HasFactory;
    protected $table = 'publishers';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'image'
    ];
}
