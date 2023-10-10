@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Paparan Utama</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session( 'status') }}
                        </div>
                    @endif

                    Tahniah, anda telah login
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header">Senarai Agensi</div>
                <div class="card-body">
                    <button type="button" class="btn btn-secondary">Tambah Agensi</button>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Agensi</th>
                            <th scope="col">Tarikh Daftar</th>
                            <th scope="col">Lain Lain</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
