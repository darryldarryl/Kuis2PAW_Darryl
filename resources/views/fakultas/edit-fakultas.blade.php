<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden"
                     style="
                        background: rgba(255,255,255,0.08);
                        backdrop-filter: blur(14px);
                        border: 1px solid rgba(255,255,255,0.1);
                     ">

                    {{-- HEADER --}}
                    <div class="card-header text-center py-4 border-0"
                         style="
                            background: linear-gradient(135deg, #0077b6, #00b4d8);
                         ">

                        <h2 class="fw-bold mb-2 text-white">
                            🌊 Edit Fakultas
                        </h2>

                        <p class="mb-0 small text-light">
                            Perbarui informasi data fakultas
                        </p>

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
                        <form action="/fakultas/{{ $fakultas->id }}" method="POST">

                            @csrf
                            @method("PUT")


                            {{-- Nama Fakultas --}}
                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    🐠 Nama Fakultas
                                </label>

                                <input
                                    type="text"
                                    name="nama_fakultas"
                                    class="form-control form-control-lg rounded-4 border-0 shadow-sm"
                                    placeholder="Masukkan nama fakultas"
                                    value="{{ $fakultas->nama_fakultas }}"
                                    required
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
                                    id="nama_dekan"
                                    class="form-control form-control-lg rounded-4 border-0 shadow-sm"
                                    placeholder="Masukkan nama dekan"
                                    value="{{ $fakultas->nama_dekan }}"
                                    required
                                    style="
                                        background: rgba(255,255,255,0.12);
                                        color: white;
                                        backdrop-filter: blur(8px);
                                    "
                                >

                            </div>


                            {{-- BUTTON --}}
                            <div class="d-flex gap-2 flex-wrap">

                                <a href="/fakultas"
                                   class="btn rounded-4 px-4 text-white border-0 shadow-sm"
                                   style="
                                        background: rgba(255,255,255,0.15);
                                        backdrop-filter: blur(8px);
                                   ">
                                    ← Kembali
                                </a>

                                <button
                                    type="submit"
                                    class="btn rounded-4 px-4 shadow border-0 fw-semibold text-white"
                                    style="
                                        background: linear-gradient(135deg, #00b4d8, #0077b6);
                                    ">
                                    🌊 Update
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