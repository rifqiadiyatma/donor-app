@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mt-3">
      <div class="card-header">
        Daftar Kabupaten
      </div>
      <div class="card-body">
        <div class="mr-auto">
          <a href="/kabupaten/tambah">Tambah Data</a>
        </div>
        @if (session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <td>No</td>
              <td>Nama</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($kabupaten as $k)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->nama_kab }}</td>
                <td><a style="display: inline" href="/kabupaten/edit/{{ $k->id_kab }}">Edit</a> |             
                  <form style="display: inline" action="/kabupaten/delete/{{ $k->id_kab }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-link">Delete</button>
                </form>
              </tr>      
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection