@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">Edit service</h1>



    @if (session('message'))
        <h2 class="text-center text-success my-3">{{session('message')}}</h2>
    @endif

    <div class="col-lg-12 mt-5 " style="margin-bottom: 200px">

        <div class="card">
          <div class="card-body">

                    <!-- Vertical Form -->
                    <form class="row g-3 mt-5" action="{{ route('backend.admins.all_services.update', ['id'=>$services->id]) }}"  method="POST">
                        @csrf

                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">title</label>
                        <input type="text" name="title" value="{{$services->title}}"   class="form-control" id="inputNanme4">
                      </div>
                      @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror


                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">icon</label>
                        <input type="text" name="icon" value="{{$services->icon}}"   value=""  class="form-control" id="inputEmail4">
                      </div>
                      @error('icon')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">desc</label>
                        <textarea name="desc"  value=""  class="form-control" id="inputEmail4">{{$services->desc}}</textarea>
                      </div>
                      @error('desc')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror


                      <div class="col-12">
                        <label class="col-sm-2 col-form-label">user_id</label>
                        <div class="col-sm-12">
                          <select class="form-select" name="user_id" aria-label="Default select example">

                            @foreach ($users as $user)                                
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach

                          </select>
                        </div>
                      </div>
                      @error('user_id')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror



                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                      </div>
                    </form><!-- Vertical Form -->
      
      

          </div>
        </div>
@endsection