@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex justify-content-between mb-3">
                            <a href="{{route('review.index')}}" class="btn btn-success btn-sm">Costomer reviews list</a>
                            <a href="{{route('review.create')}}" class="btn btn-primary btn-sm">+ Add review</a>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="text-center mt-5">
                            @if($review->image)
                                <img class="border border-primary" src="{{asset('uploads/reviews/'.$review->image)}}" alt="{{$review->fullname}}"
                                     width="300"
                                     height="300">
                            @endif
                        </div>
                        <form action="{{route('review.update',$review->id)}}" method="POST"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            Image<br>
                            <input type="file" name="image" class="form-control mb-2">
                            @error('image')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Full Name<br>
                            <input type="text" name="fullname" value="{{$review->fullname}}" class="form-control mb-2">
                            @error('fullname')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Profession<br>
                            <input type="text" name="profession" value="{{$review->profession}}"
                                   class="form-control mb-2">
                            @error('Profession')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Content<br>
                            <textarea name="content" rows="4" cols="3"
                                      class="form-control mb-2">{{$review->content}} </textarea>
                            @error('content')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($review->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($review->status==1) ? 'selected' : ''}}>Active</option>
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
