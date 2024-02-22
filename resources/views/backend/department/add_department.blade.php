@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">Add department</h1>



    @if (session('message'))
        <h2 class="text-center text-success my-3">{{session('message')}}</h2>
    @endif

    <div class="col-lg-12 mt-5 " style="margin-bottom: 200px">

        <div class="card">
          <div class="card-body">

                    <!-- Vertical Form -->
                    <form class="row g-3 mt-5" action="{{ route('backend.admins.department.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">name</label>
                        <input type="text" name="name"   class="form-control" id="inputNanme4">
                      </div>
                      @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror


                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">image</label>
                        <input type="file" name="image"  value=""  class="form-control" id="inputEmail4">
                      </div>
                      @error('image')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror


                      <div class="col-12">
                        <label for="inputPassword4" class="form-label">description</label>
                        <textarea class="form-control" name="desc"   id="inputPassword4"></textarea>
                      </div>
                      @error('desc')
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