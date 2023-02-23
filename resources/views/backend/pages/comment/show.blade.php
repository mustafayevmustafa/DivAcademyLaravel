@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="text-primary">Comment</h3>
                            <a href="{{route('comment.index')}}" class="btn btn-primary btn-sm pb-0">Comment list</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <div class="m-4">
                            <span class="text-primary">Name:</span> {{$user->name}} <br>
                            <span class="text-primary">Email:</span> {{$user->email}} <br>
                            <span class="text-primary">Phone:</span> {{$user->phone}} <br>
                            <span class="text-primary">Comment:</span><br>
                            <p class="mt-1">{{$user->comment}}</p>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <!-- /.content -->
        </div>
    </div>
@endsection
