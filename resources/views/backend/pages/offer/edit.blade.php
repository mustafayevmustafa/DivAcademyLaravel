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

                        <h3 class="text-primary mb-5">Offer</h3>

                        <form action="{{route('offer.update',$offer->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            @if($offer->image)
                                <img class="border border-primary" src="{{asset('uploads/offer/image/'.$offer->image)}}"
                                     alt="{{$offer->title}}"
                                     height="200"></p>
                            @endif
                            Image<br>
                            <input type="file" name="image" class="form-control mb-2">
                            @error('image')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            @if($offer->video)
                                <video  height="200" controls autoplay="0" loop class="mt-3"
                                       poster="{{asset('uploads/offer/image/'.$offer->image)}}">
                                    <source src="{{asset('uploads/offer/video/'.$offer->video)}}">
                                    <source src="{{asset('uploads/offer/video/'.$offer->video)}}" type="video/quicktime">
                                    Your browser does not support the video tag.
                                </video><br>
                            @endif
                            Video<br>
                            <input type="file" name="video" class="form-control mb-2">
                            @error('video')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Title<br>
                            <input type="text" name="title" class="form-control mb-2" value="{{$offer->title ?? ''}}">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($offer->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($offer->status==1) ? 'selected' : ''}}>Active</option>
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
