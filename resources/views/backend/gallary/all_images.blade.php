@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">all Images</h1>



    @if (session('message'))
        <h2 class="text-center text-success my-3">{{session('message')}}</h2>
    @endif

    <div class="col-lg-12 mt-5 " style="margin-bottom: 200px">

        <div class="card">
          <div class="card-body">

            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">image</th>
                  <th scope="col">department</th>
                  <th scope="col">created_at</th>
                  <th scope="col">updated_at</th>
                  <th scope="col">update</th>
                  <th scope="col">delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                @foreach ($images as $image)
                    
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td><img src="{{ asset('frontend/assets/img/gallery/' . $image->image) }}" width="70" alt="" srcset=""></td>
                    <td>{{$image->depart->name}}</td>
                  <td>{{$image->created_at}}</td>
                  <td>{{$image->updated_at}}</td>
                  <td><a href="{{ route('backend.admins.gallary.edit', ['id'=>$image->id]) }}" class="btn btn-success">update</a></td>
                  <td><a href="{{ route('backend.admins.gallary.destroy', ['id'=>$image->id]) }}" class="btn btn-danger">delete</a></td>
                </tr>
                @endforeach

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>
@endsection