<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireStatus extends Model
{
    use HasFactory;
    public $table = "hire_status";
    // protected $fillable = [
    //     'lawyer_id',
    //     'lawyer_name',
    //     'email',
    //     'mobile',
    //     'photo',
    //     'signature',
    //     'degree',
    //     'hire_status',
    //     'case_pdf'
    // ];
}
