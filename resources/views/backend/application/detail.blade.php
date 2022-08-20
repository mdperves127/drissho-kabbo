@extends('layouts.backend_app')
@section('backend_content')
    <div class="col-lg-12">
            <a href="{{ route('home.applications') }}" class="btn btn-sm btn-square btn-outline-primary">Back</a>
            <br>
            <h3>{{ $detail->name }}'s Detail</h3>
        <hr>
        <ul>
            <li><strong>Education Qualification: </strong> {{ $detail->education_qualification }}</li>
            <li><strong>Present Address: </strong>{{ $detail->present_address }}</li>
            <li><strong>Occupation: </strong>{{ $detail->occupation }}</li>
            <li><strong>Blood Group: </strong>{{ $detail->blood_group }}</li>
            <li><strong>Experience: </strong>{{ $detail->experience }}</li>
            <li><strong>Purpose: </strong>{{ $detail->purpose }}</li>
        </ul>
    </div>
@endsection