@extends('layouts.app')
@section('title', 'Change Barang')
@section('titlecate', 'Barang')
@section('content')
    <form action="{{ route('barang.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Category</label>
            <select id="" class="form-control" name="id_category">
                <option value="">Select Category</option>
                @foreach ($categories as $cat)
                <option {{$cat->id == $edit->id_category ? 'selected':''}} value="{{$cat->id}}">{{$cat->name}}</option>
                {{-- {{$cat->id == $edit->id_category ? 'selected':''}}
                artinya jika 'id' yang ada di table category == 'id_category' yang ada ditable barang untuk diedit
                maka 'selected' selain itu ''/kosong --}}
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="">Change Barang</label>
            <input value="{{ $edit->nama_barang }}" type="text" class="form-control" name="nama_barang" placeholder="Input Barang">
        </div>
        <div class="form-group mb-3">
            <label for="">Change Unit</label>
            <input value="{{ $edit->satuan }}" type="text" class="form-control" name="satuan" placeholder="Input Type Barang">
        </div>
        <div class="form-group mb-3">
            <label for="">Change Quantity</label>
            <input value="{{ $edit->qty }}" type="text" class="form-control" name="qty" placeholder="Input Quantity Barang">
        </div>
        <div class="form-group mb-3">
            <label for="">Change Price</label>
            <input value="{{ $edit->harga}}" type="number" class="form-control" name="harga" placeholder="Input Price Barang">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
