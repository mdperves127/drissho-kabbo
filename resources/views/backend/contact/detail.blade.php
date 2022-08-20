@extends('layouts.backend_app')
@section('backend_content')
    <div class="col-lg-12">
            <a href="{{ route('home.applications') }}" class="btn btn-sm btn-square btn-outline-primary">Back</a>
            <br>
            <h3>{{ $detail->name }}'s Detail</h3>
        <hr>
        <strong>Message:</strong> 
        <br>
        {{ $detail->message }}
    </div>
@endsection