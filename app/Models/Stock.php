<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'stocks';

    protected $fillable = [
        'title',
        'description',
        'image',
        'quantity',
    ];
}
