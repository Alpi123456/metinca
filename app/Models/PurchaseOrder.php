<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = [

    'no_po',

    'tanggal_po',

    'supplier_id',

    'nama_barang',

    'hs_code',

    'qty',

    'harga_satuan',

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
