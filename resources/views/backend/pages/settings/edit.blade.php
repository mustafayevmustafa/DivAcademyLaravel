@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex justify-content-between mb-3">
                        <a href="{{route('setting.index')}}" class="btn btn-success btn-sm">Settings list</a>
                        <a href="{{route('setting.create')}}" class="btn btn-primary btn-sm">+ Add setting</a>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                         <div class="mt-5">
                            @if($setting->image)
                                <img class="border border-primary" src="{{asset('uploads/settings/'.$setting->image)}}" alt="{{$setting->key}}"
                                     width="100"
                                     height="100">
                            @endif
                        </div>
                        <form action="{{route('setting.update',$setting->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            Image<br>
                            <input type="file" name="image" class="form-control mb-2">
                            @error('image')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Key<br>
                            <input type="text" name="key" value="{{$setting->key}}" class="form-control mb-2">
                            @error('key')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Value<br>
                            <input type="text" name="value" value="{{$setting->value}}" class="form-control mb-2">
                            @error('value')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($setting->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($setting->status==1) ? 'selected' : ''}}>Active</option>
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
