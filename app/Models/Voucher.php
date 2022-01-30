<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    
    //**obtener la organizacion del voucher */

    public function organization ()
    {
        return $this->belongsTo(Organization::class, "organization_id");
    }

    //**obtener el usuario del voucher */

    public function user ()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    //**obtener el payment_file del voucher */

    public function payment_file ()
    {
        return $this->hasOne(PaymentFile::class, "id", 'payment_file_id')->with('payment_file_status');
    }

    //**obtener el booking del voucher */

    public function booking ()
    {
        return $this->belongsTo(Booking::class, "booking_id");
    }

    //**obtener el voucher_status del voucher */

    public function voucher_status ()
    {
        return $this->belongsTo(VoucherStatus::class, "voucher_status_id");
    }

    //**obtener la company del voucher */
    
    public function company ()
    {
        return $this->belongsTo(Company::class, "company_id");
    }
}
