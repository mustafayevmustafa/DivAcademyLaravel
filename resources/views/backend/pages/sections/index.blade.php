@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{route('section.create')}}" class="btn btn-primary btn-sm">+ Add section</a>

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
                                <th>Description</th>
                                <th>URL</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sections as $section)
                                <tr>
                                    <td>{{$section->title}}</td>
                                    <td>{{substr($section->description,0,100)}}...</td>
                                    <td>{{substr($section->link,0,100)}}</td>
                                    <td>{{($section->status==1) ? 'Active' : 'Passive'}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('section.edit',$section->id)}}"
                                               class="btn btn-warning btn-sm mr-3">Edit</a>
                                            <form action="{{ route('section.destroy',$section->id) }}" method="Post">
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

                        <div class="d-flex justify-content-center">{!! $sections->links() !!}</div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <!-- /.content -->
    </div>
@endsection
