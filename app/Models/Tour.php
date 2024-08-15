<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'destination', 
        'start', 
        'end', 
        'price',
    ];

    protected $dates = [
        'start', 
        'end', 
        'deleted_at',
    ];
}
