@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success pb-0">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger pb-0">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('about.index')}}" class="btn btn-success btn-sm mb-3">About list</a>

                        <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            Icon<br>
                            <input type="file" name="icon" class="form-control mb-2">
                            @error('icon')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Icon title<br>
                            <input type="text" name="icon_title" class="form-control mb-2">
                            @error('icon_title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Title<br>
                            <input type="text" name="title" class="form-control mb-2">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Description<br>
                            <textarea name="description" rows="4" cols="3" class="form-control mb-2"></textarea>
                            @error('description')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Content<br>
                            <textarea name="content" rows="4" cols="3" class="form-control mb-2"></textarea>
                            @error('content')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Slug<br>
                            <input type="text" name="slug" class="form-control mb-2">
                            @error('slug')
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
