<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eft_master extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_name',
        'provider_lname',
        'tax_id',
        'location_seq_num',
        'bill_date',
        'invoice_number',
        'account_num',
        'filler',
        'num_record',
        'total_amount'
                
    ];
}
