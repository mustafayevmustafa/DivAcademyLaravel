@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row m-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{route('team.index')}}" class="btn btn-success btn-sm mb-3">Teams list</a>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success pb-0">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            Slug<br>
                            <input type="text" name="slug" class="form-control mb-2">
                            @error('slug')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Name<br>
                            <input type="text" name="name" class="form-control mb-2">
                            @error('name')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Surname<br>
                            <input type="text" name="surname" class="form-control mb-2">
                            @error('surname')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Profession<br>
                            <input type="text" name="profession" class="form-control mb-2">
                            @error('profession')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Facebook<br>
                            <input type="url" name="facebook" class="form-control mb-2">
                            @error('facebook')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Twitter<br>
                            <input type="url" name="twitter" class="form-control mb-2">
                            @error('twitter')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Linkedin<br>
                            <input type="url" name="linkedin" class="form-control mb-2">
                            @error('linkedin')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Email<br>
                            <input type="email" name="email" class="form-control mb-2">
                            @error('email')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Phone<br>
                            <input type="tel" name="phone" class="form-control mb-2">
                            @error('phone')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Post box<br>
                            <input type="text" name="po_box" class="form-control mb-2">
                            @error('po_box')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Description<br>
                            <textarea name="description" rows="4" cols="3" class="form-control mb-2"> </textarea>
                            @error('description')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            About<br>
                            <textarea name="about" rows="4" cols="3" class="form-control mb-2"> </textarea>
                            @error('about')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Image<br>
                            <input type="file" name="image" class="form-control mb-2">
                            @error('image')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            PDF file<br>
                            <input type="file" name="pdf_file" class="form-control mb-2">
                            @error('pdf_file')
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
