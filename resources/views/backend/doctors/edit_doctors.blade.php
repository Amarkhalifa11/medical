@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">Edit Doctor</h1>



    @if (session('message'))
        <h2 class="text-center text-success my-3">{{session('message')}}</h2>
    @endif

    <div class="col-lg-12 mt-5 " style="margin-bottom: 200px">

        <div class="card">
          <div class="card-body">

                    <!-- Vertical Form -->
                    <form class="row g-3 mt-5" action="{{ route('backend.admins.doctors.update', ['id'=>$doctors->id]) }}" enctype="multipart/form-data" method="POST">
                        @csrf


                        
                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">name</label>
                        <input type="tect" name="name" value="{{$doctors->name}}"  class="form-control" id="inputNanme4">
                      </div>
                      @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror




                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">image</label>
                        <input type="file" name="image"   class="form-control" id="inputNanme4">
                      </div>
                      @error('image')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror



                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">desc</label>
                        <textarea name="desc" value=""   class="form-control" id="inputNanme4">{{$doctors->desc}}</textarea>
                      </div>
                      @error('desc')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror



                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">twitter</label>
                        <input type="tect" name="twitter" value="{{$doctors->twitter}}"   class="form-control" id="inputNanme4">
                      </div>
                      @error('twitter')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror


                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">instagram</label>
                        <input type="tect" name="instagram" value="{{$doctors->instagram}}"   class="form-control" id="inputNanme4">
                      </div>
                      @error('instagram')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror


                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">linkiden</label>
                        <input type="tect" name="linkiden"  value="{{$doctors->linkiden}}"   class="form-control" id="inputNanme4">
                      </div>
                      @error('linkiden')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror


                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">facebook</label>
                        <input type="tect" name="facebook" value="{{$doctors->facebook}}"   class="form-control" id="inputNanme4">
                      </div>
                      @error('facebook')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror



                      <div class="col-12">
                        <label class="col-sm-2 col-form-label">department_id</label>
                        <div class="col-sm-12">
                          <select class="form-select" name="department_id" aria-label="Default select example">

                            @foreach ($departments as $department)                                
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach

                          </select>
                        </div>
                      </div>
                      @error('department_id')
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