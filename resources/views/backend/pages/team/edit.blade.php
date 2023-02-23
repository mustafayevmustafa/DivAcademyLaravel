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

                        <div class="d-flex justify-content-between mb-3">
                            <a href="{{route('team.index')}}" class="btn btn-success btn-sm">Team list</a>
                            <a href="{{route('team.create')}}" class="btn btn-primary btn-sm">+ Add team member</a>
                        </div>

                        <div class="d-flex justify-content-around mt-5">
                            @if($team->image)
                                <img class="border border-primary" src="{{asset('uploads/team/image/'.$team->image)}}"
                                     alt="{{$team->slug}}"
                                     width="300"
                                     height="300">
                            @endif

                            @if($team->pdf_file)
                                <iframe class="border border-primary"
                                        src="{{asset('uploads/team/pdf/'.$team->pdf_file)}}"
                                        width="300"
                                        height="300"></iframe>
                            @endif
                        </div>
                        <form action="{{route('team.update',$team->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

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
                            Slug<br>
                            <input type="text" name="slug" class="form-control mb-2" value="{{$team->slug}}">
                            @error('slug')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Name<br>
                            <input type="text" name="name" class="form-control mb-2" value="{{$team->name}}">
                            @error('name')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Surname<br>
                            <input type="text" name="surname" class="form-control mb-2" value="{{$team->surname}}">
                            @error('surname')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Profession<br>
                            <input type="text" name="profession" class="form-control mb-2"
                                   value="{{$team->profession}}">
                            @error('profession')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Facebook<br>
                            <input type="url" name="facebook" class="form-control mb-2" value="{{$team->facebook}}">
                            @error('facebook')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Twitter<br>
                            <input type="url" name="twitter" class="form-control mb-2" value="{{$team->twitter}}">
                            @error('twitter')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Linkedin<br>
                            <input type="url" name="linkedin" class="form-control mb-2" value="{{$team->linkedin}}">
                            @error('linkedin')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Email<br>
                            <input type="email" name="email" class="form-control mb-2" value="{{$team->email}}">
                            @error('email')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Phone<br>
                            <input type="tel" name="phone" class="form-control mb-2" value="{{$team->phone}}">
                            @error('phone')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Post box<br>
                            <input type="text" name="po_box" class="form-control mb-2" value="{{$team->po_box}}">
                            @error('po_box')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Description<br>
                            <textarea name="description" rows="4" cols="3"
                                      class="form-control mb-2">{{$team->description}}</textarea>
                            @error('description')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            About<br>
                            <textarea name="about" rows="4" cols="3"
                                      class="form-control mb-2">{{$team->about}}</textarea>
                            @error('about')
                            <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror
                            Status<br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{($team->status==0) ? 'selected' : ''}}>Non-Active</option>
                                <option value="1" {{($team->status==1) ? 'selected' : ''}}>Active</option>
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
