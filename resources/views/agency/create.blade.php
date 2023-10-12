@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Agensi</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('agency.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Agensi</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Agensi">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Agensi</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Agensi">
                        </div>
                        @error('alamat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
