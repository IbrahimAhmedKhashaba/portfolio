@extends('layouts.dashboard.app')
@section('title')
    Expertise
@endsection
@section('body')
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Expertise Table</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    @include('dashboard.Expertise.create')
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Desc</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Desc</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse($expertise as $expertise)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $expertise->title }}</td>
                                        <td>{{ $expertise->desc }}</td>
                                        <td>
                                            <div class="d-flex">
                                                @include('dashboard.expertise.edit')
                                                
                                                <a class="btn" href="javascript:void(0)"
                                                    onclick="getElementById('delete-form-{{ $expertise->id }}').submit()"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                            <form id="delete-form-{{ $expertise->id }}" style="display: none;"
                                                action="{{ route('dashboard.expertise.destroy', $expertise->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                    <div>No Expertise Found</div>
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
