@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mx-auto" style="max-width: 700px;">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="fw-bold mb-0">Tambah Pengguna Baru</h3>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="form-control form-control-lg shadow-sm" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="mb-4">
                    <label for="npm" class="form-label fw-semibold">NPM</label>
                    <input type="text" id="npm" name="npm" class="form-control form-control-lg shadow-sm" placeholder="Masukkan NPM" required>
                </div>

                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select form-select-lg shadow-sm" required>
                        <option value="" disabled selected>Pilih kelas...</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/user" class="btn btn-outline-secondary btn-lg">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                        <i class="bi bi-save-fill"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection