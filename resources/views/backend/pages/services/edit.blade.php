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
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex justify-content-between mb-3">
                        <a href="{{route('service.index')}}" class="btn btn-success btn-sm">services list</a>
                        <a href="{{route('service.create')}}" class="btn btn-primary btn-sm">+ Add service</a>
                        </div>

                        <form action="{{route('service.update',$service->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="mt-5">
                                @if($service->pdf_file)
                                    <iframe  class="border border-primary" src="{{asset('uploads/services/pdf/'.$service->pdf_file)}}"
                                         width="300"
                                         height="300"></iframe>
                                @endif
                            </div>
                            PDF file<br>
                            <input type="file" name="pdf_file" class="form-control mb-2">
                            @error('pdf_file')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror

                            <div class="mt-5">
                                @if($service->image)
                                    <img class="border border-primary" src="{{asset('uploads/services/image/'.$service->image)}}" alt="{{$service->title}}"
                                         width="200"
                                         height="200">
                                @endif
                            </div>
                            Image<br>
                            <input type="file" name="image" class="form-control mb-2">
                            @error('image')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror

                            <div class="mt-5">
                                @if($service->logo)
                                    <img class="border border-primary" src="{{asset('uploads/services/logo/'.$service->logo)}}" alt="{{$service->title}}"
                                         width="100"
                                         height="100">
                                @endif
                            </div>
                            Logo<br>
                            <input type="file" name="logo" class="form-control mb-2">
                            @error('logo')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror

                            Title<br>
                            <input type="text" name="title" value="{{$service->title}}" class="form-control mb-2">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Description<br>
                            <textarea name="description" rows="4" cols="3" class="form-control mb-2"> {{$service->description}}</textarea>
                            @error('description')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Content<br>
                            <textarea name="content" rows="4" cols="3" class="form-control mb-2">{{$service->content}} </textarea>
                            @error('content')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($service->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($service->status==1) ? 'selected' : ''}}>Active</option>
                            </select>
                            @error('status')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Slug<br>
                            <input type="text" name="slug" value="{{$service->slug}}" class="form-control mb-2">
                            @error('slug')
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
