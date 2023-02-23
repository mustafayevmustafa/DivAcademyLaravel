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

                        <h3 class="text-primary mb-5">Chart</h3>

                        <form action="{{route('chart.update',$chart->id)}}" method="POST">
                            @method('PUT')
                            @csrf

                            Title<br>
                            <input type="text" name="title" class="form-control mb-2" value="{{$chart->title}}">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Content<br>
                            <textarea name="content" rows="4" cols="3"
                                      class="form-control mb-2">{{$chart->content}}</textarea>
                            @error('content')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Location<br>
                            <input type="number" name="location" class="form-control mb-2" value="{{$chart->location}}">
                            @error('location')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Consultant<br>
                            <input type="number" name="consultant" class="form-control mb-2"
                                   value="{{$chart->consultant}}">
                            @error('consultant')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Project<br>
                            <input type="number" name="project" class="form-control mb-2" value="{{$chart->project}}">
                            @error('project')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($chart->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($chart->status==1) ? 'selected' : ''}}>Active</option>
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
