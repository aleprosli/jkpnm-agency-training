@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kemaskini {{ $agency->name }} Agensi</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('agency.update', $agency) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Agensi</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Agensi" value="{{ $agency->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Agensi</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Agensi" value="{{ $agency->alamat }}">
                        </div>

                        <button type="submit" class="btn btn-warning">Kemaskini</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
