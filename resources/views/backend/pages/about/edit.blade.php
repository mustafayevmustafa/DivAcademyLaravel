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

                        <div class="d-flex justify-content-between mb-3">
                        <a href="{{route('about.index')}}" class="btn btn-success btn-sm">About list</a>
                        <a href="{{route('about.create')}}" class="btn btn-primary btn-sm">+ Add about</a>
                        </div>
                        <div class="text-center mt-5">
                            @isset($about->icon)
                                <img class="border border-primary" src="{{asset('uploads/about/'.$about->icon)}}" alt="{{$about->slug}}"
                                     width="300"
                                     height="300">
                            @endisset
                        </div>
                        <form action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            Icon<br>
                            <input type="file" name="icon" class="form-control mb-2">
                            @error('icon')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Icon title<br>
                            <input type="text" name="icon_title" class="form-control mb-2" value="{{$about->icon_title ?? ''}}">
                            @error('icon_title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Title<br>
                            <input type="text" name="title" value="{{$about->title ?? ''}}" class="form-control mb-2">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Description<br>
                            <textarea name="description" rows="4" cols="3" class="form-control mb-2"> {{$about->description ?? ''}}</textarea>
                            @error('description')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Content<br>
                            <textarea name="content" rows="4" cols="3" class="form-control mb-2">{{$about->content ?? ''}} </textarea>
                            @error('content')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Slug<br>
                            <input type="text" name="slug" value="{{$about->slug}}" class="form-control mb-2">
                            @error('slug')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($about->status==0) ? 'selected' : ''}}>Passive</option>
                                <option value="1" {{($about->status==1) ? 'selected' : ''}}>Active</option>
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
