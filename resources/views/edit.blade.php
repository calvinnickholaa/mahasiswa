@extends('layouts.admin')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Mahasiswa</h1>
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="card-header  ">
                <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                <!-- DataTales Example -->
                <div class="card-body">
                    <form action="{{ route('update', $mahasiswa->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $mahasiswa->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim"
                                value="{{ $mahasiswa->nim }}">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="string" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                value="{{ $mahasiswa->tanggal_lahir }}">
                        </div>
                        <div class="mb-3">
                            <label for="angkatan" class="form-label">Angkatan</label>
                            <input type="number" class="form-control" id="angkatan" name="angkatan"
                                value="{{ $mahasiswa->angkatan }}">
                        </div>
                        <div class="mb-3">
                            <label for="rombel" class="form-label">Rombel</label>
                            <input type="number" class="form-control" id="rombel" name="rombel"
                                value="{{ $mahasiswa->rombel }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
