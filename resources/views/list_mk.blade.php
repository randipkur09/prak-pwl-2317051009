@extends('layouts.app')

@section('title', 'Daftar Mata Kuliah')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Mata Kuliah</h5>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-light btn-sm fw-semibold">
            + Tambah Mata Kuliah Baru
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-primary text-center">
                    <tr>
                        <th style="width: 20%;">ID</th>
                        <th>Nama Mata Kuliah</th>
                        <th style="width: 10%;">SKS</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mks as $mk)
                        <tr>
                            <td class="text-break">{{ $mk->id }}</td>
                            <td>{{ $mk->nama_mk }}</td>
                            <td class="text-center">{{ $mk->sks }}</td>
                            <td class="text-center">
                                <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                                   class="btn btn-sm btn-warning me-1">
                                   Edit
                                </a>

                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" 
                                      method="POST" 
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Belum ada data mata kuliah.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection