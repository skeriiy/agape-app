<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table='transactions';
    protected $primaryKey='transaction_id';
    protected $fillable=[
        'message_id',
        'total_amount_due',
        'total_amount_received',
        'change'
    ];
}
