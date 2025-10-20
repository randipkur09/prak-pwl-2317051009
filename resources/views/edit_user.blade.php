@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-primary fw-bold text-center">Edit Data Pengguna</h2>

    <form action="{{ route('user.update', $user->id) }}" method="POST" class="card p-4 shadow-sm border-0 rounded-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NPM</label>
            <input type="text" id="nim" name="nim" class="form-control" value="{{ $user->nim }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
            <select name="kelas_id" id="kelas_id" class="form-select">
                @foreach ($kelas as $k)
                    <option value="{{ $k->id }}" {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan Perubahan
            </button>
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
