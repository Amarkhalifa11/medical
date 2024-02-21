@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">Edit Count</h1>



    @if (session('message'))
        <h2 class="text-center text-success my-3">{{session('message')}}</h2>
    @endif

    <div class="col-lg-12 mt-5 " style="margin-bottom: 200px">

        <div class="card">
          <div class="card-body">

                    <!-- Vertical Form -->
                    <form class="row g-3 mt-5" action="{{ route('backend.admins.all_count.update', ['id'=>$counts->id]) }}" method="POST">
                        @csrf

                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">title</label>
                        <input type="text" name="title" value="{{$counts->title}}"  class="form-control" id="inputNanme4">
                      </div>
                      @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror


                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">count</label>
                        <input type="text" name="count"  value="{{$counts->count}}"  class="form-control" id="inputEmail4">
                      </div>
                      @error('count')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror


                      <div class="col-12">
                        <label for="inputPassword4" class="form-label">description</label>
                        <textarea class="form-control" name="desc"   id="inputPassword4">{{$counts->desc}}</textarea>
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