@extends('layouts.dashboard.app')
@section('title')
    Contacts
@endsection
@section('body')
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Contacts Table</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse($contacts as $contact)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>
                                            <div class="d-flex">
                                                @include('dashboard.contacts.show')
                                                
                                                <a class="btn" href="javascript:void(0)"
                                                    onclick="getElementById('delete-form-{{ $contact->id }}').submit()"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                            <form id="delete-form-{{ $contact->id }}" style="display: none;"
                                                action="{{ route('dashboard.contacts.destroy', $contact->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                    <div>No Contacts Found</div>
                                @endforelse
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
