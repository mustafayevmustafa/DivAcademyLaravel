@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{route('slider.index')}}" class="btn btn-success btn-sm mb-3">Sliders list</a>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            Title<br>
                            <input type="text" name="title" class="form-control mb-2">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Sub title<br>
                            <input type="text" name="subtitle" class="form-control mb-2">
                            @error('subtitle')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Button title<br>
                            <input type="text" name="button_title" class="form-control mb-2">
                            @error('button_title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            URL<br>
                            <input type="url" name="button_url" class="form-control mb-2">
                            @error('button_url')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Image<br>
                            <input type="file" name="image" class="form-control mb-2">
                            @error('image')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0">Non-Active</option>
                                <option value="1">Active</option>
                            </select>
                            @error('status')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            <button type="submit" class="btn btn-primary mt-3">Create</button>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <!-- /.content -->
        </div>
    </div>
@endsection
