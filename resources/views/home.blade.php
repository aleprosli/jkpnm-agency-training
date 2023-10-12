@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('mesej'))
                <div class="alert alert-success" role="alert">
                    {{ session( 'mesej') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Paparan Utama</div>

                <div class="card-body">

                    Tahniah, anda telah login
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header">Senarai Agensi</div>
                    <form method="" action="">
                        <div class="input-group mt-2 p-2">
                            <input type="text" class="form-control" name="search" value="{{ request()->get('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                <div class="card-body">
                    <a href="{{ route('agency.create') }}" type="button" class="btn btn-secondary">Tambah Agensi</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Agensi</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tarikh daftar</th>
                            <th scope="col">Lain Lain</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($senaraiAgensi as $key => $agency)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $agency->name }}</td>
                                    <td>{{ $agency->alamat }}</td>
                                    <td>{{ $agency->created_at }}</td>
                                    <td>
                                        <a href="{{ route('agency.show', $agency) }}" type="button" class="btn btn-warning">Kemaskini</a>
                                        <a href="{{ route('agency.delete', $agency) }}" type="button" class="btn btn-danger">Padam</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
