@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow p-4 mt-4">
        <h2 class="mb-4 text-success fw-bold">Edit Mata Kuliah</h2>

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                <input 
                    type="text" 
                    id="nama_mk" 
                    name="nama_mk" 
                    class="form-control"
                    value="{{ $mk->nama_mk }}" 
                    required>
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input 
                    type="number" 
                    id="sks" 
                    name="sks" 
                    class="form-control"
                    value="{{ $mk->sks }}" 
                    required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-pencil-square"></i> Update
                </button>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection