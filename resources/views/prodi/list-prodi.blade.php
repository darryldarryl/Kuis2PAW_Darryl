<x-layout>

    <div class="container py-5">

        {{-- ALERT SUCCESS --}}
        @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show rounded-4 border-0 shadow-lg mb-4"
                 role="alert"
                 style="
                    background: rgba(25, 135, 84, 0.2);
                    backdrop-filter: blur(10px);
                    color: white;
                 ">

                🌊 {{ session('success') }}

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="alert"
                        aria-label="Close">
                </button>

            </div>

        @endif


        {{-- HEADER --}}
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

            <div>

                <h2 class="fw-bold mb-1 text-info">
                    🌊 List Program Studi
                </h2>

                <p class="text-light opacity-75 mb-0">
                    Data seluruh program studi universitas
                </p>

            </div>

            <a href="{{ route('prodi.create') }}"
               class="btn rounded-4 shadow border-0 text-white px-4"
               style="
                    background: linear-gradient(135deg, #00b4d8, #0077b6);
               ">

                ➕ Tambah Prodi

            </a>

        </div>


        {{-- CARD --}}
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden"
             style="
                background: rgba(255,255,255,0.08);
                backdrop-filter: blur(14px);
                border: 1px solid rgba(255,255,255,0.1);
             ">

            <div class="card-body p-4">

                <div class="table-responsive">

                    <table class="table align-middle table-borderless text-white">

                        {{-- TABLE HEADER --}}
                        <thead>

                            <tr style="
                                    background: rgba(0,180,216,0.25);
                                    backdrop-filter: blur(8px);
                                ">

                                <th class="py-3 rounded-start-4">
                                    No
                                </th>

                                <th class="py-3">
                                    🐠 Nama Prodi
                                </th>

                                <th class="py-3">
                                    🪸 Nama Kaprodi
                                </th>

                                <th class="py-3">
                                    🐚 Alias / Kode
                                </th>

                                <th class="py-3 text-center rounded-end-4">
                                    ⚓ Aksi
                                </th>

                            </tr>

                        </thead>


                        {{-- TABLE BODY --}}
                        <tbody>

                            @forelse ($prodis as $item)

                                <tr style="
                                        background: rgba(255,255,255,0.04);
                                        border-bottom: 1px solid rgba(255,255,255,0.05);
                                   ">

                                    <td class="fw-semibold py-3">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>

                                        <span class="fw-bold text-info">
                                            {{ $item->nama_prodi }}
                                        </span>

                                    </td>

                                    <td>
                                        {{ $item->nama_kaprodi }}
                                    </td>

                                    <td>

                                        <span class="badge rounded-3 px-3 py-2"
                                              style="
                                                background: rgba(255,255,255,0.15);
                                                color: #90e0ef;
                                              ">

                                            {{ $item->alias_prodi }}

                                        </span>

                                    </td>

                                    <td class="text-center">

                                        <div class="d-flex justify-content-center gap-2 flex-wrap">

                                            {{-- DETAIL --}}
                                            <a href="{{ route('prodi.show', $item->id) }}"
                                               class="btn btn-sm rounded-4 text-white border-0 shadow-sm"
                                               style="
                                                    background: linear-gradient(135deg, #48cae4, #0096c7);
                                               ">

                                                👁 Detail

                                            </a>


                                            {{-- EDIT --}}
                                            <a href="{{ route('prodi.edit', $item->id) }}"
                                               class="btn btn-sm rounded-4 text-white border-0 shadow-sm"
                                               style="
                                                    background: linear-gradient(135deg, #00b4d8, #0077b6);
                                               ">

                                                ✏ Edit

                                            </a>


                                            {{-- DELETE --}}
                                            <form action="{{ route('prodi.destroy', $item->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus data prodi ini?')">

                                                @csrf
                                                @method("DELETE")

                                                <button type="submit"
                                                        class="btn btn-sm rounded-4 border-0 shadow-sm text-white"
                                                        style="
                                                            background: linear-gradient(135deg, #ef476f, #d62828);
                                                        ">

                                                    🗑 Hapus

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="5"
                                        class="text-center py-5 text-light opacity-75">

                                        🌊 Data program studi belum tersedia

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

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

</x-layout>