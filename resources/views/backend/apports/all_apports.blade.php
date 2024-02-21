@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">all Apports</h1>



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
                  <th scope="col">Name</th>
                  <th scope="col">email</th>
                  <th scope="col">phone</th>
                  <th scope="col">doctor</th>
                  <th scope="col">department</th>
                  <th scope="col">date</th>
                  <th scope="col">message</th>
                  <th scope="col">created_at</th>
                  <th scope="col">updated_at</th>
                  <th scope="col">delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                @foreach ($apports as $apport)
                    
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$apport->name}}</td>
                  <td>{{$apport->email}}</td>
                  <td>{{$apport->phone}}</td>
                  <td>{{$apport->doctor}}</td>
                  <td>{{$apport->department}}</td>
                  <td>{{$apport->date}}</td>
                  <td>{{$apport->message}}</td>
                  <td>{{$apport->created_at}}</td>
                  <td>{{$apport->updated_at}}</td>
                  <td><a href="{{ route('backend.admins.all_apports.destroy', ['id'=>$apport->id]) }}" class="btn btn-danger">delete</a></td>
                </tr>
                @endforeach

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>
@endsection