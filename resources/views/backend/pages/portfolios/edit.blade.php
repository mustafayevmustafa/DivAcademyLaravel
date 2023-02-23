@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex justify-content-between mb-3">
                            <a href="{{route('portfolio.index')}}" class="btn btn-success btn-sm">Portfolios list</a>
                            <a href="{{route('portfolio.create')}}" class="btn btn-primary btn-sm">+ Add portfolio</a>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="text-center mt-5">
                            @if($portfolio->image)
                                <img class="border border-primary" src="{{asset('uploads/portfolios/'.$portfolio->image)}}"
                                     alt="{{$portfolio->slug}}"
                                     width="300"
                                     height="300">
                            @endif
                        </div>
                        <form action="{{route('portfolio.update',$portfolio->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            Image<br>
                            <input type="file" name="image" class="form-control mb-2">
                            @error('image')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Title<br>
                            <input type="text" name="title" value="{{$portfolio->title}}" class="form-control mb-2">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Sub title<br>
                            <input type="text" name="subtitle" value="{{$portfolio->subtitle}}" class="form-control mb-2">
                            @error('subtitle')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Description<br>
                            <textarea name="description" rows="4" cols="3" class="form-control mb-2"> {{$portfolio->description}}</textarea>
                            @error('description')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Caterory<br>
                            <select class="custom-select form-control" name="cat_id">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{($category->id == $portfolio->cat_id) ? 'selected' : ''}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                            @error('cat_id')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($portfolio->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($portfolio->status==1) ? 'selected' : ''}}>Active</option>
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
