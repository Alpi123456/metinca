@extends('layouts.app')

@section('content')

<div class="container">

<h3>Tambah Purchase Order</h3>

<form method="POST"
      action="{{ route('purchase-order.store') }}">

@csrf

<div class="mb-3">

    <label>No PO</label>

    <input
        type="text"
        name="no_po"
        class="form-control"
        required>

</div>

<div class="mb-3">

    <label>Tanggal PO</label>

    <input
        type="date"
        name="tanggal_po"
        class="form-control"
        required>

</div>

<div class="mb-3">

    <label>Supplier</label>

    <select
        name="supplier_id"
        class="form-control">

        @foreach($suppliers as $supplier)

            <option value="{{ $supplier->id }}">
                {{ $supplier->nama_supplier }}
            </option>

        @endforeach

    </select>

</div>

<div class="mb-3">

<label>Nama Barang</label>

<input type="text"
       name="nama_barang"
       class="form-control">

</div>

<div class="mb-3">

<label>HS Code</label>

<input type="text"
       name="hs_code"
       class="form-control">

</div>

<div class="mb-3">

<label>Qty</label>

<input type="number"
       name="qty"
       class="form-control">

</div>

<div class="mb-3">

<label>Harga Satuan</label>

<input type="number"
       name="harga_satuan"
       class="form-control">

</div>

<div class="mb-3">

<label>Nilai CIF</label>

<input type="number"
       name="nilai_cif"
       class="form-control">

</div>

<button class="btn btn-primary">

Simpan

</button>

</form>

</div>

@endsection