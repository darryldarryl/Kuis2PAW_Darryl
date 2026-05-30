<x-layout>

    {{-- STYLE UNDERWATER --}}
    <style>
        body {
            background: linear-gradient(to bottom, #001f3f, #003566, #00509d);
            color: white;
        }

        .ocean-section {
            position: relative;
            overflow: hidden;
        }

        .bubble {
            position: absolute;
            bottom: -100px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            animation: float 12s infinite ease-in;
        }

        .bubble:nth-child(1) {
            width: 40px;
            height: 40px;
            left: 10%;
            animation-duration: 10s;
        }

        .bubble:nth-child(2) {
            width: 25px;
            height: 25px;
            left: 30%;
            animation-duration: 14s;
        }

        .bubble:nth-child(3) {
            width: 50px;
            height: 50px;
            left: 70%;
            animation-duration: 18s;
        }

        .bubble:nth-child(4) {
            width: 20px;
            height: 20px;
            left: 90%;
            animation-duration: 11s;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateY(-120vh);
                opacity: 0;
            }
        }

        .glass-card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.15);
            color: white;
        }

        .text-soft {
            color: rgba(255,255,255,0.8);
        }

        .btn-ocean {
            background: #00b4d8;
            color: white;
            border: none;
        }

        .btn-ocean:hover {
            background: #0096c7;
            color: white;
        }

        .wave {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>

    {{-- HERO SECTION --}}
    <section class="ocean-section text-white py-5">

        {{-- Bubble Animation --}}
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>

        <div class="container">

            <div class="row align-items-center min-vh-75">

                {{-- Text --}}
                <div class="col-lg-6">

                    <span class="badge bg-info text-dark px-3 py-2 rounded-pill mb-3">
                        🌊 Sistem Informasi 
                    </span>

                    <h1 class="display-3 fw-bold mb-4">
                        Kelola Data Fakultas
                        <span class="text-warning">
                            Sejernih Lautan
                        </span>
                    </h1>

                    <p class="lead text-soft mb-4">
                        Platform modern bertema bawah laut untuk mengelola
                        data fakultas, dekan, dan informasi akademik dengan
                        tampilan elegan dan futuristik.
                    </p>

                    <div class="d-flex flex-wrap gap-3">

                        <a href="/fakultas"
                           class="btn btn-light btn-lg rounded-4 px-4 shadow">
                            🐠 Lihat Fakultas
                        </a>

                        <a href="/fakultas/create"
                           class="btn btn-ocean btn-lg rounded-4 px-4 shadow">
                            🪸 Tambah Fakultas
                        </a>

                    </div>

                </div>

                {{-- Illustration --}}
                <div class="col-lg-6 text-center mt-5 mt-lg-0">

                    <img src="https://cdn-icons-png.flaticon.com/512/616/616490.png"
                         class="img-fluid"
                         style="max-height: 420px;"
                         alt="Underwater">

                </div>

            </div>

        </div>

    </section>


    {{-- FEATURES --}}
    <section class="py-5 ocean-section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold display-6">
                    🌊 Keunggulan Sistem Informasi
                </h2>

                <p class="text-soft">
                    Teknologi modern dengan nuansa bawah laut yang menenangkan
                </p>

            </div>

            <div class="row g-4">

                {{-- Feature 1 --}}
                <div class="col-md-4">

                    <div class="card glass-card border-0 shadow-lg h-100 rounded-4">

                        <div class="card-body text-center p-5">

                            <div class="bg-info text-dark rounded-circle d-inline-flex justify-content-center align-items-center mb-4"
                                 style="width:80px;height:80px;font-size:35px;">
                                🐳
                            </div>

                            <h4 class="fw-bold">
                                Cepat & Elegan
                            </h4>

                            <p class="text-soft">
                                Sistem modern dengan performa cepat dan
                                desain bertema samudera.
                            </p>

                        </div>

                    </div>

                </div>

                {{-- Feature 2 --}}
                <div class="col-md-4">

                    <div class="card glass-card border-0 shadow-lg h-100 rounded-4">

                        <div class="card-body text-center p-5">

                            <div class="bg-success text-white rounded-circle d-inline-flex justify-content-center align-items-center mb-4"
                                 style="width:80px;height:80px;font-size:35px;">
                                🐠
                            </div>

                            <h4 class="fw-bold">
                                Aman
                            </h4>

                            <p class="text-soft">
                                Data terlindungi seperti harta karun
                                di dasar lautan.
                            </p>

                        </div>

                    </div>

                </div>

                {{-- Feature 3 --}}
                <div class="col-md-4">

                    <div class="card glass-card border-0 shadow-lg h-100 rounded-4">

                        <div class="card-body text-center p-5">

                            <div class="bg-warning text-dark rounded-circle d-inline-flex justify-content-center align-items-center mb-4"
                                 style="width:80px;height:80px;font-size:35px;">
                                🪼
                            </div>

                            <h4 class="fw-bold">
                                Mudah Digunakan
                            </h4>

                            <p class="text-soft">
                                Interface intuitif dan nyaman seperti
                                menjelajah dunia bawah laut.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- STATISTICS --}}
    <section class="py-5">

        <div class="container">

            <div class="row text-center g-4">

                <div class="col-md-3">

                    <div class="card glass-card border-0 shadow rounded-4 p-4">

                        <h1 class="fw-bold text-info">
                            20+
                        </h1>

                        <p class="text-soft mb-0">
                            Fakultas
                        </p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card glass-card border-0 shadow rounded-4 p-4">

                        <h1 class="fw-bold text-success">
                            100+
                        </h1>

                        <p class="text-soft mb-0">
                            Staff Akademik
                        </p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card glass-card border-0 shadow rounded-4 p-4">

                        <h1 class="fw-bold text-warning">
                            5000+
                        </h1>

                        <p class="text-soft mb-0">
                            Mahasiswa
                        </p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card glass-card border-0 shadow rounded-4 p-4">

                        <h1 class="fw-bold text-danger">
                            24/7
                        </h1>

                        <p class="text-soft mb-0">
                            Akses Sistem
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- CTA --}}
    <section class="py-5 text-white ocean-section">

        <div class="container text-center">

            <h2 class="fw-bold display-6 mb-4">
                🌊 Mulai Jelajahi Sistem Akademik Dengan Tema Lautan
            </h2>

            <p class="lead text-soft mb-4">
                Tingkatkan efisiensi administrasi dengan nuansa samudera modern
            </p>

            <a href="/fakultas/create"
               class="btn btn-ocean btn-lg rounded-4 px-5 shadow">
                🚀 Mulai Sekarang
            </a>

        </div>

    </section>


    {{-- FOOTER --}}
    <footer class="bg-dark text-light py-4 border-top border-info">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <h5 class="fw-bold mb-1">
                        🌊 Sistem Informasi Fakultas
                    </h5>

                    <small class="text-secondary">
                        Underwater Academic Management System
                    </small>

                </div>

                <div class="col-md-6 text-md-end mt-3 mt-md-0">

                    <small class="text-secondary">
                        © {{ date('Y') }} All Rights Reserved
                    </small>

                </div>

            </div>

        </div>

    </footer>

</x-layout>