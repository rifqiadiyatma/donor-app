@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      Tambah Data
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
            <ul>
              <li>{{ $error }}</li>
            </ul>
          @endforeach
        </div>
      @endif
      <form action="/kabupaten/simpan" method="post">
        @csrf

        <label for="nama_kab">Nama</label>
        <input class="form-control" type="text" name="nama_kab" id="nama_kab" value="{{ old('nama_kab') }}">

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>
    </div>
  </div>
@endsection