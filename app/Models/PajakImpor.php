<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PajakImpor extends Model
{
    protected $table = 'pajak_impor';

    protected $fillable = [
        'purchase_order_id',
        'bea_masuk',
        'ppn',
        'pph22',
        'total_pajak',
        'jatuh_tempo',
        'status'
    ];

    public function purchaseOrder()
    {
        return $this->belongsTo(PurchaseOrder::class);
    }
}
