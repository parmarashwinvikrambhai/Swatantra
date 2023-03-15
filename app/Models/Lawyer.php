<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;
    public $table = "lawyer";
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'description',
    ];
}
