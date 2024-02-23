@extends('backend.layouts.index')
@section('content')
    <h1 style="margin-left: 500px" class="mt-5">all Doctors</h1>



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
                  <th scope="col">image</th>
                  <th scope="col">desc</th>
                  <th scope="col">twitter</th>
                  <th scope="col">instagram</th>
                  <th scope="col">linkiden</th>
                  <th scope="col">facebook</th>
                  <th scope="col">department_id</th>
                  <th scope="col">created_at</th>
                  <th scope="col">updated_at</th>
                  <th scope="col">update</th>
                  <th scope="col">delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                @foreach ($doctors as $doctor)
                    
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$doctor->name}}</td>
                  <td><img src="{{ asset('frontend/assets/img/doctors/' . $doctor->image) }}" width="70" alt="" srcset=""></td>
                  <td>{{$doctor->desc}}</td>
                  <td>{{$doctor->twitter}}</td>
                  <td>{{$doctor->instagram}}</td>
                  <td>{{$doctor->linkiden}}</td>
                  <td>{{$doctor->facebook}}</td>
                  <td>{{$doctor->depart->name}}</td>
                  <td>{{$doctor->created_at}}</td>
                  <td>{{$doctor->updated_at}}</td>
                  <td><a href="{{ route('backend.admins.doctors.edit', ['id'=>$doctor->id]) }}" class="btn btn-success">update</a></td>
                  <td><a href="{{ route('backend.admins.doctors.destroy', ['id'=>$doctor->id]) }}" class="btn btn-danger">delete</a></td>
                </tr>
                @endforeach

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>
@endsection