<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PayBackSage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="bg-body-secondary">
<nav class="navbar navbar-expand-lg bg-white shadow-sm flex-column mt-0">
    <div class="container-fluid w-75">
        <a class="navbar-brand text-success" href="#">
            <h3 class="fw-semibold">PayBackSage</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ms-4">
                    <a class="nav-link active" aria-current="page" href="#">Всі магазини</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#">Як купити з кешбеком?</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="btn btn-outline-success sing-in" type="submit">Вхід</a>
                <a class="btn btn-success sing-up ms-3" type="submit">Реестрація</a>
            </div>
        </div>
    </div>
    <div class="container-fluid w-75 mt-3">
        <form class="d-flex justify-content-start col-md-5" role="search">
            <input class="form-control me-2 mb-2" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
</nav>

@yield('content')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
