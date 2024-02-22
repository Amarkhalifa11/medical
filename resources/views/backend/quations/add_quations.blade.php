@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">Add quations</h1>



    @if (session('message'))
        <h2 class="text-center text-success my-3">{{session('message')}}</h2>
    @endif

    <div class="col-lg-12 mt-5 " style="margin-bottom: 200px">

        <div class="card">
          <div class="card-body">

                    <!-- Vertical Form -->
                    <form class="row g-3 mt-5" action="{{ route('backend.admins.all_questions.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">ask</label>
                        <input type="text" name="ask"   class="form-control" id="inputNanme4">
                      </div>
                      @error('ask')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror


                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">answer</label>
                        <input type="text" name="answer"  value=""  class="form-control" id="inputEmail4">
                      </div>
                      @error('answer')
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