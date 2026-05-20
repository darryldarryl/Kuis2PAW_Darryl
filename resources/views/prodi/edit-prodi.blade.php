<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden"
                     style="
                        background: rgba(255,255,255,0.08);
                        backdrop-filter: blur(12px);
                        border: 1px solid rgba(255,255,255,0.1);
                     ">

                    {{-- HEADER --}}
                    <div class="card-header text-center py-4 border-0"
                         style="
                            background: linear-gradient(135deg, #0077b6, #00b4d8);
                         ">

                        <h2 class="fw-bold mb-2 text-white">
                            🌊 Edit Program Studi
                        </h2>

                        <p class="mb-0 small text-light">
                            Perbarui informasi data program studi
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
                        <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">

                            @csrf
                            @method("PUT")


                            {{-- Nama Prodi --}}
                            <div class="mb-4">

                                <label for="nama_prodi" class="form-label fw-semibold">
                                    🐠 Nama Prodi
                                </label>

                                <input
                                    type="text"
                                    id="nama_prodi"
                                    name="nama_prodi"
                                    class="form-control form-control-lg rounded-4 border-0 shadow-sm @error('nama_prodi') is-invalid @enderror"
                                    placeholder="Masukkan nama prodi"
                                    value="{{ old('nama_prodi', $prodi->nama_prodi) }}"
                                    style="
                                        background: rgba(255,255,255,0.12);
                                        color: white;
                                        backdrop-filter: blur(8px);
                                    "
                                >

                            </div>


                            {{-- Nama Kaprodi --}}
                            <div class="mb-4">

                                <label for="nama_kaprodi" class="form-label fw-semibold">
                                    🪸 Nama Kaprodi
                                </label>

                                <input
                                    type="text"
                                    id="nama_kaprodi"
                                    name="nama_kaprodi"
                                    class="form-control form-control-lg rounded-4 border-0 shadow-sm @error('nama_kaprodi') is-invalid @enderror"
                                    placeholder="Masukkan nama kaprodi"
                                    value="{{ old('nama_kaprodi', $prodi->nama_kaprodi) }}"
                                    style="
                                        background: rgba(255,255,255,0.12);
                                        color: white;
                                        backdrop-filter: blur(8px);
                                    "
                                >

                            </div>


                            {{-- Alias Prodi --}}
                            <div class="mb-4">

                                <label for="alias_prodi" class="form-label fw-semibold">
                                    🐚 Pilih Kode/Alias Prodi
                                </label>

                                <select
                                    name="alias_prodi"
                                    id="alias_prodi"
                                    class="form-select form-select-lg rounded-4 border-0 shadow-sm @error('alias_prodi') is-invalid @enderror"
                                    style="
                                        background: rgba(255,255,255,0.12);
                                        color: white;
                                        backdrop-filter: blur(8px);
                                    "
                                >

                                    @php
                                        $currentAlias = old('alias_prodi', $prodi->alias_prodi);
                                    @endphp

                                    <option value="SI" class="text-dark"
                                        {{ $currentAlias == 'SI' ? 'selected' : '' }}>
                                        Sistem Informasi
                                    </option>

                                    <option value="TI" class="text-dark"
                                        {{ $currentAlias == 'TI' ? 'selected' : '' }}>
                                        Teknik Informatika
                                    </option>

                                    <option value="SK" class="text-dark"
                                        {{ $currentAlias == 'SK' ? 'selected' : '' }}>
                                        Sistem Komputer
                                    </option>

                                </select>

                            </div>


                            {{-- BUTTON --}}
                            <div class="d-flex gap-2">

                                <a href="{{ route('prodi.index') }}"
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
                                    "
                                >
                                    🌊 Update Data
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
                            🌊 Sistem Informasi Program Studi
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>