<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationReq extends Model
{
    use HasFactory;
    public $table = "donation_request";
    protected $fillable = [
        'case_id',
        'amount'
    ];
}
