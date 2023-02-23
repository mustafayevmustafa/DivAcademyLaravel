@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                @if ($message = Session::get('erorr'))
                    <div class="alert alert-danger pb-0">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">

                        <h3 class="text-primary mb-5">Chart</h3>

                        <form action="{{route('chart.store')}}" method="post">
                            @csrf

                            Title<br>
                            <input type="text" name="title" class="form-control mb-2">
                            @error('title')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Content<br>
                            <textarea name="content" rows="4" cols="3" class="form-control mb-2"> </textarea>
                            @error('content')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Location<br>
                            <input type="number" name="location" class="form-control mb-2">
                            @error('location')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Consultant<br>
                            <input type="number" name="consultant" class="form-control mb-2">
                            @error('consultant')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Project<br>
                            <input type="number" name="project" class="form-control mb-2">
                            @error('project')
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
