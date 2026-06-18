<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = [
        'no_po',
        'supplier_id',
        'tanggal_po',
        'nilai_barang',
        'currency',
        'nilai_cif',
        'status'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function pajakImpor()
    {
        return $this->hasOne(PajakImpor::class);
    }
}