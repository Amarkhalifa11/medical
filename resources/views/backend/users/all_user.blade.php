@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">all users : {{count($users)}}</h1>
    <div class="col-lg-12 mt-5 " style="margin-bottom: 200px">

        <div class="card">
          <div class="card-body">

            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Name</th>
                  <th scope="col">email</th>
                  <th scope="col">created_at</th>
                  <th scope="col">updated_at</th>
                  <th scope="col">delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                @foreach ($users as $user)
                    
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at}}</td>
                  <td>{{$user->updated_at}}</td>
                  <td><a href="#" class="btn btn-danger">delete</a></td>
                </tr>
                @endforeach

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>
@endsection