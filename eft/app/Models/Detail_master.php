<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_master extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_lname',
        'customer_fname',
        'birth_date',
        'security_num',
        'state_residence',
        'policy_num',
        'service_date',
        'service_code',
        'busn_code1',
        'busn_code2',
        'busn_code3',
        'busn_code4',
        'billed_amount',
        'source_num',
        'marketer_lname',
        'marketer_code',
        'office_code'
        
    ];
}
