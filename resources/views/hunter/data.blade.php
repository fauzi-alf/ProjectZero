@extends('layout.main')

@section('content')
<h3>Data Hunter</h3>
<div class="card">
    <div class="card-header">
      <button  type="button" class="btn btn-sm btn-primary">
        <i class="far fa-plus-square"></i> Tambah Hunter
      </button>
    </div>
    <div class="card-body">
        <table class="table table-sm table-striped table-borderes">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Hunter</th>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hunter as $data )
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->idhunter}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->genre}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->emailaddress}}</td>
                        <td>{{$data->phone}}</td>
                        <td>Blm ado</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
@endsection