@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">all Department</h1>



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
                  <th scope="col">name</th>
                  <th scope="col">desc</th>
                  <th scope="col">image</th>
                  <th scope="col">created_at</th>
                  <th scope="col">updated_at</th>
                  <th scope="col">update</th>
                  <th scope="col">delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                @foreach ($departments as $department)
                    
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$department->name}}</td>
                  <td>{{$department->desc}}</td>
                  <td><img src="{{ asset('frontend/assets/img/' . $department->image) }}" width="70" alt="" srcset=""></td>
                  <td>{{$department->created_at}}</td>
                  <td>{{$department->updated_at}}</td>
                  <td><a href="{{ route('backend.admins.department.edit', ['id'=>$department->id]) }}" class="btn btn-success">update</a></td>
                  <td><a href="{{ route('backend.admins.department.destroy', ['id'=>$department->id]) }}" class="btn btn-danger">delete</a></td>
                </tr>
                @endforeach

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>
@endsection