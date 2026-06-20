@extends('layouts.app')

@section('title','Supplier')

@section('content')

<div class="page-heading">
    <h3>Data Supplier</h3>
</div>

<div class="card">

    <div class="card-body">

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Supplier</th>
                    <th>Negara</th>
                    <th>Email</th>
                    <th>Telepon</th>
                </tr>
            </thead>

            <tbody>

            @foreach($suppliers as $supplier)

                <tr>

                    <td>{{ $supplier->id }}</td>

                    <td>{{ $supplier->nama_supplier }}</td>

                    <td>{{ $supplier->negara }}</td>

                    <td>{{ $supplier->email }}</td>

                    <td>{{ $supplier->telepon }}</td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection