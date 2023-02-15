@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex justify-content-between mb-3">
                            <a href="{{route('slider.index')}}" class="btn btn-success btn-sm">sliders list</a>
                            <a href="{{route('slider.create')}}" class="btn btn-primary btn-sm">+ Add slider</a>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="text-center mt-5">
                            @if($slider->image)
                                <img class="border border-primary" src="{{asset('uploads/sliders/'.$slider->image)}}"
                                     alt="{{$slider->slug}}"
                                     width="300"
                                     height="300">
                            @endif
                        </div>
                        <form action="{{route('slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            Image<br>
                            <input type="file" name="image" class="form-control mb-2">
                            @error('image')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Title<br>
                            <input type="text" name="title" value="{{$slider->title}}" class="form-control mb-2">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Sub title<br>
                            <input type="text" name="subtitle" value="{{$slider->subtitle}}" class="form-control mb-2">
                            @error('subtitle')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Button title<br>
                            <input type="text" name="button_title" value="{{$slider->button_title}}" class="form-control mb-2">
                            @error('button_title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            URL<br>
                            <input type="url" name="button_url" value="{{$slider->button_url}}" class="form-control mb-2">
                            @error('button_url')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($slider->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($slider->status==1) ? 'selected' : ''}}>Active</option>
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
