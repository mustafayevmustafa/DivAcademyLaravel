@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex justify-content-between mb-3">
                        <a href="{{route('category.index')}}" class="btn btn-success btn-sm">categories list</a>
                        <a href="{{route('category.create')}}" class="btn btn-primary btn-sm">+ Add category</a>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form action="{{route('category.update',$category->id)}}" method="POST">
                            @method('PUT')
                            @csrf

                            Title<br>
                            <input type="text" name="title" value="{{$category->title}}" class="form-control mb-2">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($category->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($category->status==1) ? 'selected' : ''}}>Active</option>
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
