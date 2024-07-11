@extends('layouts.app')
@section('title', 'Add Barang')
@section('titlecate', 'Barang')
@section('content')
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        {{-- @method('PUT') --}}
        <div class="form-group mb-3">
            <label for="">Category</label>
            <select id="" class="form-control" name="id_category">
                <option value="">Select Category</option>
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="">Add Unit</label>
            <input type="text" class="form-control" name="nama_barang"
                placeholder="Input Unit">
        </div>
        <div class="form-group mb-3">
            <label for="">Add Type Unit</label>
            <input type="text" class="form-control" name="satuan"
                placeholder="Input Type Unit">
        </div>
        <div class="form-group mb-3">
            <label for="">Add Quantity</label>
            <input type="text" class="form-control" name="qty"
                placeholder="Input Quantity Unit">
        </div>
        <div class="form-group mb-3">
            <label for="">Add Price</label>
            <input type="number" class="form-control" name="harga"
                placeholder="Input Price Unit">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
