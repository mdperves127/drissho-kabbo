@extends('layouts.backend_app')
@section('backend_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Applications</h4>
            </div>
            @if (session('delete_contact'))
                <span class="alert alert-success">{{ session('delete_contact') }}</span>
            @endif
            <div class="table-responsive">
            <div class="card-body">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>NAME</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact)
                            <tr>
                                <td><strong>{{ $loop->index+1 }}</strong></td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone_number }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('home.contact.view', $contact->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-eye"></i></a>
                                        <a href="{{ route('home.contact.delete', $contact->id) }}" class="btn btn-danger shadow btn-xs sharp" onclick="event.preventDefault();
                                        document.getElementById('contact-delete-form').submit();"><i
                                                class="fa fa-trash"></i></a>
                                                
                                    <form id="contact-delete-form" action="{{ route('home.contact.delete', $contact->id) }}" method="POST" class="d-none">
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