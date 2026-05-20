<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card shadow-lg border-0 rounded-4 overflow-hidden"
                     style="
                        background: rgba(255,255,255,0.08);
                        backdrop-filter: blur(14px);
                        border: 1px solid rgba(255,255,255,0.1);
                     ">

                    {{-- HEADER --}}
                    <div class="card-header text-white text-center py-4 border-0"
                         style="
                            background: linear-gradient(135deg, #0077b6, #00b4d8);
                         ">

                        <h3 class="mb-2 fw-bold">
                            🌊 Form Data Fakultas
                        </h3>

                        <small class="text-light">
                            Silakan isi data fakultas dengan lengkap
                        </small>

                    </div>


                    {{-- BODY --}}
                    <div class="card-body p-4 text-white">

                        {{-- ERROR --}}
                        @if ($errors->any())

                            <div class="alert alert-danger rounded-4 border-0 shadow-sm">

                                <ul class="mb-0">

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        {{-- FORM --}}
                        <form action="/fakultas" method="POST">

                            @csrf


                            {{-- Nama Fakultas --}}
                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    🐠 Nama Fakultas
                                </label>

                                <input
                                    type="text"
                                    name="nama_fakultas"
                                    class="form-control form-control-lg rounded-4 border-0 shadow-sm"
                                    placeholder="Contoh: Fakultas Teknik"
                                    style="
                                        background: rgba(255,255,255,0.12);
                                        color: white;
                                        backdrop-filter: blur(8px);
                                    "
                                >

                            </div>


                            {{-- Nama Dekan --}}
                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    🪸 Nama Dekan
                                </label>

                                <input
                                    type="text"
                                    name="nama_dekan"
                                    class="form-control form-control-lg rounded-4 border-0 shadow-sm"
                                    placeholder="Contoh: Dr. Budi Santoso"
                                    style="
                                        background: rgba(255,255,255,0.12);
                                        color: white;
                                        backdrop-filter: blur(8px);
                                    "
                                >

                            </div>


                            {{-- BUTTON --}}
                            <div class="d-grid">

                                <button
                                    type="submit"
                                    class="btn btn-lg rounded-4 shadow border-0 fw-semibold text-white"
                                    style="
                                        background: linear-gradient(135deg, #00b4d8, #0077b6);
                                    "
                                >
                                    🌊 Simpan Data
                                </button>

                            </div>

                        </form>

                    </div>


                    {{-- FOOTER --}}
                    <div class="card-footer text-center border-0 py-3"
                         style="
                            background: rgba(255,255,255,0.05);
                         ">

                        <small class="text-light">
                            🌊 Sistem Informasi Fakultas
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>