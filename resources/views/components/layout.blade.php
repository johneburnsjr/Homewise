<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeWise - Smart Home Maintenance</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            background-color: #F3F4F6;
            color: #111827;
        }
        h1, h2, h3, .navbar-brand {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
        }
        .navbar {
            background-color: #1E3A8A; /* Navy Blue */
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .btn-primary {
            background-color: #F59E0B; /* Amber Highlight */
            border: none;
        }
        .btn-primary:hover {
            background-color: #d97706;
        }
        .hero {
            padding: 5rem 1rem;
            text-align: center;
            background: linear-gradient(135deg, #1E3A8A 0%, #3B82F6 100%);
            color: white;
        }
        .feature-icon {
            font-size: 3rem;
            color: #3B82F6;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
    @include('layouts.navigation')
    <!-- Fixed navbar -->
{{--    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">--}}
{{--        <div class="container-fluid">--}}
{{--            <a class="navbar-brand" href="#">Fixed navbar</a>--}}
{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="navbarCollapse">--}}
{{--                <ul class="navbar-nav me-auto mb-2 mb-md-0">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Link</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <form class="d-flex">--}}
{{--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
</header>
<body>
{{ $slot }}
</body>
</html>
