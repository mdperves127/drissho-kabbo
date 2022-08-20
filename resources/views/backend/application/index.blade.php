@extends('layouts.backend_app')
@section('backend_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Applications</h4>
            </div>
            @if (session('delete_application'))
                <span class="alert alert-success">{{ session('delete_application') }}</span>
            @endif
            <div class="table-responsive">
            <div class="card-body">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>NAME</th>
                                <th>Number</th>
                                <th>Fathers Name</th>
                                <th>Mothers Name</th>
                                <th>Date Of Birth</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($applications as $application)
                            <tr>
                                <td><strong>{{ $loop->index+1 }}</strong></td>
                                <td>
                                    {{ $application->name }}
                                </td>
                                <td>{{ $application->number }}</td>
                                <td>{{ $application->fname }}</td>
                                <td>{{ $application->mname }}</td>
                                <td>
                                    {{ $application->dob }}
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('home.application.view', $application->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-eye"></i></a>
                                        <a href="{{ route('home.application.delete', $application->id) }}" class="btn btn-danger shadow btn-xs sharp" onclick="event.preventDefault();
                                        document.getElementById('application-delete-form').submit();"><i
                                                class="fa fa-trash"></i></a>
                                                
                                    <form id="application-delete-form" action="{{ route('home.application.delete', $application->id) }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                
                            <td colspan="50">No Data Found</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection