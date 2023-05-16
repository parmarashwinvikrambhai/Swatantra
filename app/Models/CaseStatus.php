<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStatus extends Model
{
    use HasFactory;
    public $table = "case_status";
    protected $fillable = [
        'case_name',
        'description',
        'status',
        'client_id',
        'next_hearing',
        'case_id',
        'lawyer_name'
    ];
}
