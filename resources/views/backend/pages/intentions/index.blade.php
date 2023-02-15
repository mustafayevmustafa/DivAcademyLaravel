@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{route('intention.create')}}" class="btn btn-primary btn-sm">+ Add intention</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($intentions as $intention)
                                <tr>
                                    <td>{{$intention->title}}</td>
                                    <td>
                                        @if($intention->image)
                                            <img src="{{asset('uploads/intentions/'.$intention->image)}}" alt="" width="100" height="100">
                                        @endif
                                    </td>
                                    <td>{{($intention->status==1) ? 'Active' : 'Passive'}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('intention.edit',$intention->id)}}"
                                               class="btn btn-warning btn-sm mr-3">Edit</a>
                                            <form action="{{ route('intention.destroy',$intention->id) }}" method="Post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">{!! $intentions->links() !!}</div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <!-- /.content -->
    </div>
@endsection
