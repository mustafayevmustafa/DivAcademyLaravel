@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex justify-content-between mb-3">
                        <a href="{{route('faq.index')}}" class="btn btn-success btn-sm">Faq list</a>
                        <a href="{{route('faq.create')}}" class="btn btn-primary btn-sm">+ Add faq</a>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form action="{{route('faq.update',$faq->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            Question<br>
                            <textarea name="question" rows="4" cols="3" class="form-control mb-2">{{$faq->question}} </textarea>
                            @error('question')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Answer<br>
                            <textarea name="answer" rows="4" cols="3" class="form-control mb-2"> {{$faq->answer}}</textarea>
                            @error('answer')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($faq->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($faq->status==1) ? 'selected' : ''}}>Active</option>
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
