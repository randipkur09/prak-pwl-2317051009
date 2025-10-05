<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #dbeafe 0%, #ffffff 100%);
            font-family: 'Poppins', sans-serif;
            color: #1e293b;
        }

        .navbar {
            background: linear-gradient(90deg, #2563eb, #3b82f6);
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        h1, h3 {
            font-weight: 700;
        }

        table {
            border-radius: 0.75rem;
            overflow: hidden;
        }

        thead {
            background-color: #1e3a8a;
            color: white;
        }

        footer {
            background: linear-gradient(90deg, #2563eb, #3b82f6);
            color: white;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
        }

        footer p {
            margin: 0;
            font-weight: 500;
        }

        .btn-primary {
            background: linear-gradient(90deg, #2563eb, #1d4ed8);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #1d4ed8, #1e40af);
        }

        .btn-success {
            background: linear-gradient(90deg, #16a34a, #22c55e);
            border: none;
        }

        .btn-success:hover {
            background: linear-gradient(90deg, #15803d, #16a34a);
        }
    </style>
</head>
<body>

    @include('components.navbar')

    <main class="py-5">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
