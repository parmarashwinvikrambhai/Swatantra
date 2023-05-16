<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;
    public $table = "cases";
    protected $fillable = [
        'case_title',
        'case_type',
        'case_date',
        'case_details',
        'case_status',
        'photo',
        'signature'
    ];
}