@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{route('faq.index')}}" class="btn btn-success btn-sm mb-3">Faq list</a>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <form action="{{route('faq.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            Question<br>
                            <textarea name="question" rows="4" cols="3" class="form-control mb-2"> </textarea>
                            @error('question')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Answer<br>
                            <textarea name="answer" rows="4" cols="3" class="form-control mb-2"> </textarea>
                            @error('answer')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0">Non-Active</option>
                                <option value="1">Active</option>
                            </select>
                            @error('status')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            <button type="submit" class="btn btn-primary mt-3">Create</button>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <!-- /.content -->
        </div>
    </div>
@endsection
