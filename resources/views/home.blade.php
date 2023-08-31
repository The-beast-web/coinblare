@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('dgg') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name">
                <input type="text" name="value">
                <input type="text" name="address">
                <input type="file" name="image">
                <button type="submit">Add coin</button>
            </form>
        </div>
    </div>
</div>
@endsection
