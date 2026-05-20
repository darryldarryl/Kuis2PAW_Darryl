<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>🌊 Sistem Informasi Fakultas</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    {{-- Custom CSS --}}
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #001d3d, #003566, #00509d);
            color: white;
            overflow-x: hidden;
            position: relative;
        }

        /* Bubble Animation */
        .bubble{
            position: fixed;
            bottom: -120px;
            background: rgba(255,255,255,0.15);
            border-radius: 50%;
            animation: bubble 15s infinite ease-in;
            z-index: -1;
        }

        .bubble:nth-child(1){
            width: 40px;
            height: 40px;
            left: 10%;
            animation-duration: 10s;
        }

        .bubble:nth-child(2){
            width: 25px;
            height: 25px;
            left: 30%;
            animation-duration: 14s;
        }

        .bubble:nth-child(3){
            width: 60px;
            height: 60px;
            left: 60%;
            animation-duration: 18s;
        }

        .bubble:nth-child(4){
            width: 20px;
            height: 20px;
            left: 80%;
            animation-duration: 12s;
        }

        .bubble:nth-child(5){
            width: 35px;
            height: 35px;
            left: 50%;
            animation-duration: 16s;
        }

        @keyframes bubble{
            0%{
                transform: translateY(0);
                opacity: 0;
            }

            50%{
                opacity: 1;
            }

            100%{
                transform: translateY(-120vh);
                opacity: 0;
            }
        }

        /* Navbar */
        .navbar{
            background: rgba(0, 25, 51, 0.7);
            backdrop-filter: blur(12px);
            padding: 15px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .navbar-brand{
            font-size: 24px;
            font-weight: 700;
            color: #90e0ef !important;
        }

        .nav-link{
            color: rgba(255,255,255,0.85) !important;
            font-weight: 500;
            transition: 0.3s;
            position: relative;
        }

        .nav-link:hover{
            color: #00d4ff !important;
            transform: translateY(-2px);
        }

        /* Main Content */
        main{
            min-height: 100vh;
            position: relative;
            z-index: 1;
        }

        /* Card */
        .card{
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 24px;
            overflow: hidden;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(10px);
            color: white;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
        }

        /* Button */
        .btn{
            border-radius: 14px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn:hover{
            transform: translateY(-3px);
        }

        .btn-warning{
            background: linear-gradient(45deg, #00b4d8, #0096c7);
            border: none;
        }

        .btn-warning:hover{
            background: linear-gradient(45deg, #0096c7, #0077b6);
        }

        /* Footer */
        footer{
            background: rgba(0,0,0,0.4);
            backdrop-filter: blur(10px);
            color: rgba(255,255,255,0.7);
            padding: 20px 0;
            margin-top: 50px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

    </style>

</head>

<body>

    {{-- Bubble Background --}}
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container">

            {{-- Logo --}}
            <a class="navbar-brand" href="/">
                🌊 SI Fakultas
            </a>

            {{-- Toggle --}}
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            {{-- Menu --}}
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            🏠 Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/fakultas">
                            🐠 Fakultas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi.index') }}">
                            🪸 Prodi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi.create') }}">
                            ➕ Tambah Prodi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/fakultas/create"
                           class="btn btn-warning text-white px-4 shadow">
                            🌊 Tambah Fakultas
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    {{-- CONTENT --}}
    <main>
        {{ $slot }}
    </main>


    {{-- FOOTER --}}
    <footer>

        <div class="container text-center">

            <h5 class="fw-bold mb-2">
                🌊 Sistem Informasi Fakultas
            </h5>

            <small>
                Underwater Academic Management System © {{ date('Y') }}
            </small>

        </div>

    </footer>


    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>