<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-lg border-0 rounded-4" style="width: 22rem;">
        <div class="card-body text-center">
            <!-- Foto dari public/images -->
            <img src="{{ asset('images/' . $foto) }}" 
                 alt="Foto Profil" 
                 class="rounded-circle mb-3 border" 
                 style="width: 120px; height: 120px; object-fit: cover;">

            <!-- Data -->
            <div class="alert alert-secondary fw-bold mb-2">
                Nama: {{ $nama }}
            </div>
             <div class="alert alert-secondary fw-bold">
                NPM: {{ $npm }}
            </div>
            <div class="alert alert-secondary fw-bold mb-2">
                Kelas: {{ $kelas }}
            </div>
           
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
