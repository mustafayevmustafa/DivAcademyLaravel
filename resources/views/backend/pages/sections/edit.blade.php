@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex justify-content-between mb-3">
                        <a href="{{route('section.index')}}" class="btn btn-success btn-sm">Sections list</a>
                        <a href="{{route('section.create')}}" class="btn btn-primary btn-sm">+ Add section</a>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form action="{{route('section.update',$section->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            URL<br>
                            <input type="url" name="link" value="{{$section->link}}" class="form-control mb-2">
                            @error('link')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Title<br>
                            <input type="text" name="title" value="{{$section->title}}" class="form-control mb-2">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Description<br>
                            <textarea name="description" rows="4" cols="3" class="form-control mb-2">{{$section->description}}</textarea>
                            @error('description')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($section->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($section->status==1) ? 'selected' : ''}}>Active</option>
                            </select>
                            @error('status')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            <button type="submit" class="btn btn-warning mt-3">Edit</button>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <!-- /.content -->
        </div>
    </div>
@endsection
