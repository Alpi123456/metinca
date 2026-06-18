{{-- Inlcude layout utama (Sidebar dan footer) --}}
@extends('layouts.app')

{{-- Set title berdasarkan page --}}
@section('title', 'Dashbaord')

{{-- Untuk menggunakan css --}}
@push('styles')
    {{-- contoh --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/static/css/pages/dashboard.css') }}"> --}}
@endpush

{{-- Isi content --}}
@section('content')

    <div class="page-heading">
    <h3>Dashboard Pembayaran Pajak Impor</h3>
    <p class="text-muted">
        PT. Metinca Prima Industrial Works
    </p>
</div>

<div class="page-content">

    <section class="row">

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6>Total PO Impor</h6>
                    <h3>125</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6>Tagihan Pajak</h6>
                    <h3>Rp 850.000.000</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6>Sudah Dibayar</h6>
                    <h3>95</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6>Belum Dibayar</h6>
                    <h3>30</h3>
                </div>
            </div>
        </div>

    </section>

    <section class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header">
                    <h4>Tracking Pembayaran Pajak Impor</h4>
                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>No PO</th>
                                <th>Supplier</th>
                                <th>Jenis Pajak</th>
                                <th>Nominal</th>
                                <th>Jatuh Tempo</th>
                                <th>Status</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>PO-001</td>
                                <td>ABC Jepang</td>
                                <td>PPN Impor</td>
                                <td>Rp 5.000.000</td>
                                <td>20-06-2026</td>
                                <td>
                                    <span class="badge bg-success">
                                        Lunas
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>PO-002</td>
                                <td>XYZ China</td>
                                <td>PPh 22</td>
                                <td>Rp 7.500.000</td>
                                <td>25-06-2026</td>
                                <td>
                                    <span class="badge bg-warning">
                                        Pending
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>PO-003</td>
                                <td>Korea Supplier</td>
                                <td>Bea Masuk</td>
                                <td>Rp 4.000.000</td>
                                <td>28-06-2026</td>
                                <td>
                                    <span class="badge bg-danger">
                                        Belum Bayar
                                    </span>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>

</div>
@endsection

{{-- Untuk menggunakan js --}}
@push('scripts')
   
@endpush