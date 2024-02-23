@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">all service</h1>



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
                  <th scope="col">title</th>
                  <th scope="col">icon</th>
                  <th scope="col">description</th>
                  <th scope="col">admin</th>
                  <th scope="col">created_at</th>
                  <th scope="col">updated_at</th>
                  <th scope="col">update</th>
                  <th scope="col">delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                @foreach ($services as $service)
                    
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$service->title}}</td>
                  <td>{{$service->icon}}</td>
                  <td>{{$service->desc}}</td>
                  <td>{{$service->admin->name}}</td>
                  <td>{{$service->created_at}}</td>
                  <td>{{$service->updated_at}}</td>
                  <td><a href="{{ route('backend.admins.all_services.edit', ['id'=>$service->id]) }}" class="btn btn-success">update</a></td>
                  <td><a href="{{ route('backend.admins.all_services.destroy', ['id'=>$service->id]) }}" class="btn btn-danger">delete</a></td>
                </tr>
                @endforeach

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>
@endsection