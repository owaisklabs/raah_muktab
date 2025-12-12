<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesPaymentDetail extends Model
{
    use HasFactory;
    protected $table='sales_payment_details';
    protected $fillable = ['sales_id','amount_received','payment_type','remarks','account_number','cheque_number','created_by'];


}
