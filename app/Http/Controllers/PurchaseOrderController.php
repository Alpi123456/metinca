<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function index()
    {
        $purchaseOrders = PurchaseOrder::with('supplier')->get();

        return view(
            'purchase_order.index',
            compact('purchaseOrders')
        );
    }

    public function create()
    {
        $suppliers = Supplier::all();

        return view(
            'purchase_order.create',
            compact('suppliers')
        );
    }

    public function store(Request $request)
    {
        PurchaseOrder::create([

            'no_po' => $request->no_po,
            
            'tanggal_po' => $request->tanggal_po,

            'supplier_id' => $request->supplier_id,

            'nama_barang' => $request->nama_barang,

            'hs_code' => $request->hs_code,

            'qty' => $request->qty,

            'harga_satuan' => $request->harga_satuan,

            'nilai_barang' =>
                $request->qty *
                $request->harga_satuan,

            'currency' => 'IDR',

            'nilai_cif' => $request->nilai_cif,

            'status' => 'pending'
        ]);

        return redirect()
            ->route('purchase-order.index');
    }
}
