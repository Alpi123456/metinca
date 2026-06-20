@extends('layouts.app')

@section('content')

<div class="container">

<h3>Purchase Order</h3>

<a href="{{ route('purchase-order.create') }}"
   class="btn btn-primary mb-3">

Tambah PO

</a>

<table class="table table-bordered">

<thead>

<tr>

<th>No PO</th>
<th>Supplier</th>
<th>Barang</th>
<th>HS Code</th>
<th>Qty</th>
<th>CIF</th>

</tr>

</thead>

<tbody>

@foreach($purchaseOrders as $po)

<tr>

<td>{{ $po->no_po }}</td>

<td>{{ $po->supplier->nama_supplier ?? '-' }}</td>

<td>{{ $po->nama_barang }}</td>

<td>{{ $po->hs_code }}</td>

<td>{{ $po->qty }}</td>

<td>{{ number_format($po->nilai_cif) }}</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection