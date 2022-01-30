<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentFile extends Model
{
    use HasFactory;

    //** obtener status del payment_file */

    public function payment_file_status()
    {
        return $this->hasOne(PaymentFileStatus::class, 'id', 'payment_file_status_id');
    }
}
