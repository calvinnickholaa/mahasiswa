@extends('layouts.admin')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Fakultas</h1>
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="card-header  ">
                <h6 class="m-0 font-weight-bold text-primary">Data Fakultas</h6>
                <!-- DataTales Example -->
                <div class="card-body">
                    <form action="{{ route('stores') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
