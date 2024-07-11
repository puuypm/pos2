@extends('layouts.app')
@section('title', 'Data Barang')
@section('titlecate', 'Barang')
@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('barang.create') }}" class="btn btn-primary btn-sm"><i
                    class="fas fa-plus mr-1"></i><strong>Add</strong></a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Category</th>
                    <th>Unit</th>
                    <th>Type Unit</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->category->name }}</td>
                        <td>{{ $d->nama_barang }}</td>
                        <td>{{ $d->satuan }}</td>
                        <td>{{ $d->qty }}</td>
                        <td>Rp. {{ number_format($d->harga) }}</td>
                        <td>
                            <a href="{{ route('barang.edit', $d->id) }}" class="btn btn-sm bg-success">
                                <i class="fas fa-edit"> Edit</i>
                            </a>
                            {{-- <a href="" class="btn btn-sm bg-danger">
                                <i class="fas fa-trash"> Hapus</i>
                            </a> --}}
                            <form method="POST" action="{{ route('barang.destroy', $d->id) }}" class="d-inline">
                                @csrf
                                <input type="hidden" value="DELETE" name="_method">
                                <button class="btn btn-danger btn-sm show_confirm" type="submit">
                                    <i class="fas fa-trash"> Delete</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
