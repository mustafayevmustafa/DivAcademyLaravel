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
                        <a href="{{route('blog.index')}}" class="btn btn-success btn-sm">Blogs list</a>
                        <a href="{{route('blog.create')}}" class="btn btn-primary btn-sm">+ Add blog</a>
                        </div>

                        <div class="text-center mt-5">
                            @if($blog->image)
                                <img class="border border-primary" src="{{asset('uploads/blogs/'.$blog->image)}}" alt="{{$blog->slug}}"
                                     width="300"
                                     height="300">
                            @endif
                        </div>
                        <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            Image<br>
                            <input type="file" name="image" class="form-control mb-2">
                            @error('image')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Slug<br>
                            <input type="text" name="slug" value="{{$blog->slug}}" class="form-control mb-2">
                            @error('slug')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Title<br>
                            <input type="text" name="title" value="{{$blog->title}}" class="form-control mb-2">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Description<br>
                            <textarea name="description" rows="4" cols="3" class="form-control mb-2"> {{$blog->description}}</textarea>
                            @error('description')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Content<br>
                            <textarea name="content" rows="4" cols="3" class="form-control mb-2">{{$blog->content}} </textarea>
                            @error('content')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($blog->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($blog->status==1) ? 'selected' : ''}}>Active</option>
                            </select>
                            @error('status')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Tags<br>
                            <input type="text" name="tags" class="form-control mb-2" value="{{$blog->tags}}">
                            @error('tags')
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
