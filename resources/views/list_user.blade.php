@extends('layouts.app')

@section('content')
<div class="container">
    {{-- ✅ Alert Notifikasi --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Daftar Pengguna</h1>
        <p class="text-muted">Menampilkan seluruh data pengguna beserta kelasnya</p>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('user.create') }}" class="btn btn-success shadow-sm">
            <i class="bi bi-person-plus"></i> Tambah Pengguna
        </a>
    </div>

    <div class="card p-3 shadow-sm border-0 rounded-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td class="fw-semibold">{{ $user->name }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>
                                <span class="badge bg-primary bg-gradient">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>
                            <td>
                                {{-- Tombol Edit --}}
                                <a href="{{ route('user.edit', $user->id) }}" 
                                   class="btn btn-warning btn-sm rounded-pill shadow-sm me-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>

                                {{-- Tombol Delete --}}
                                <form action="{{ route('user.destroy', $user->id) }}" 
                                      method="POST" 
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus {{ $user->name }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-danger btn-sm rounded-pill shadow-sm">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
