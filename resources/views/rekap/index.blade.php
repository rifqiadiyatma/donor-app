@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mt-3">
      <div class="card-header">
        Daftar Rekap
      </div>
      <div class="card-body">
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
                <td>{{}}</td>
                <td>{{  }}</td>
              </tr>      
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection