@extends('layouts.dashboard.app')
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet" />
@endpush
@section('title')
    Settings
@endsection
@section('body')
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <form action="{{ route('dashboard.settings.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body shadow">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input value="{{ $settings->name }}" type="text" name="name" class="form-control"
                                    id="name" placeholder="Enter name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input value="{{ $settings->email }}" type="email" name="email" class="form-control"
                                    id="email" placeholder="Enter User Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input value="{{ $settings->phone }}" type="text" name="phone" class="form-control"
                                    id="phone" placeholder="Enter phone">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birthdate">Birthdate:</label>
                                <input value="{{ $settings->birthdate }}" type="date" name="birthdate"
                                    class="form-control" id="birthdate" placeholder="Enter User birthdate">
                                @error('birthdate')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="position">Position:</label>
                                <input value="{{ $settings->position }}" type="text" name="position" class="form-control"
                                    id="position" placeholder="Enter position">
                                @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input value="{{ $settings->address }}" type="text" name="address" class="form-control"
                                    id="address" placeholder="Enter address">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook">Facebook:</label>
                                <input value="{{ $settings->facebook }}" type="text" name="facebook"
                                    class="form-control" id="facebook" placeholder="Enter User facebook">
                                @error('facebook')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram">Instagram:</label>
                                <input value="{{ $settings->instagram }}" type="text" name="instagram"
                                    class="form-control" id="instagram" placeholder="Enter instagram">
                                @error('instagram')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="linkedin">Linkedin:</label>
                                <input value="{{ $settings->linkedin }}" type="text" name="linkedin"
                                    class="form-control" id="linkedin" placeholder="Enter User linkedin">
                                @error('linkedin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="github">Github:</label>
                                <input value="{{ $settings->github }}" type="text" name="github"
                                    class="form-control" id="github" placeholder="Enter User github">
                                @error('github')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input value="{{ $settings->location }}" type="text" name="location"
                                    class="form-control" id="location" placeholder="Enter User location">
                                @error('location')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hours_worked">Hours Worked:</label>
                                <input value="{{ $settings->hours_worked }}" type="text" name="hours_worked"
                                    class="form-control" id="hours_worked" placeholder="Enter User hours_worked">
                                @error('hours_worked')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_count">Client Count:</label>
                                <input value="{{ $settings->client_count }}" type="text" name="client_count"
                                    class="form-control" id="client_count" placeholder="Enter User client_count">
                                @error('client_count')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cofe_drinked">Cofe Drinked</label>
                                <input value="{{ $settings->cofe_drinked }}" type="text" name="cofe_drinked"
                                    class="form-control" id="cofe_drinked" placeholder="Enter User cofe_drinked">
                                @error('cofe_drinked')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cv">CV:</label>
                                <input value="{{ $settings->cv }}" type="file" name="cv" class="form-control"
                                    id="cv" placeholder="Enter User cv">
                                @error('cv')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                    </div> --}}

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cv">CV:</label>
                                <input data-default-file="{{ asset('uploads/settings/' . $settings->cv) }}" type="file"
                                    name="cv" class="form-control" id="cv" placeholder="Enter User cv">
                                @error('cv')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="slider">Slider:</label>
                                <input data-default-file="{{ asset('uploads/settings/' . $settings->slider) }}"
                                    type="file" name="slider" class="form-control" id="slider"
                                    placeholder="Enter User slider">
                                @error('slider')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input data-default-file="{{ asset('uploads/settings/' . $settings->image) }}"
                                    type="file" name="image" class="form-control" class="dropify" id="image"
                                    placeholder="Enter User image">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        $('#slider').dropify({
            messages: {
                'default': 'Drop a file here',
                'replace': 'Drop a file here ',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $('#image').dropify({
            messages: {
                'default': 'Drop a file here',
                'replace': 'Drop a file here',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $('#cv').dropify({
            messages: {
                'default': 'Drop a file here',
                'replace': 'Drop a file here',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    </script>
@endpush
