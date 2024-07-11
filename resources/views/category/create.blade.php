@extends('layouts.app')
@section('title', 'Add Category')
@section('titlecate', 'Category')
@section('content')
<form action="{{route('category.store')}}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="">Name Category</label>
        <input type="text" class="form-control" name="name" placeholder="Input Category">
    </div>
    <div class="form-group mb-3">
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="reset" class="btn btn-danger" value="Cancel">
        <a href="{{url()->previous()}}" class="btn btn-info">Back</a>
    </div>
</form>
@endsection
