@extends('layouts.app')
@section('title', 'Change Category')
@section('titlecate', 'Category')
@section('content')
    <form action="{{ route('category.update', $edit->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group mb-3">
            <label for="">Change Category</label>
            <input value="{{$edit->name}}" type="text" class="form-control" name="name" placeholder="Input Category">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
