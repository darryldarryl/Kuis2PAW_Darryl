<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden"
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

                        <h2 class="fw-bold mb-2">
                            🌊 Detail Prodi
                        </h2>

                        <p class="mb-0 small text-light">
                            Informasi lengkap data Program Studi
                        </p>

                    </div>


                    {{-- BODY --}}
                    <div class="card-body p-4 text-white">

                        <table class="table table-borderless align-middle text-white">

                            <tbody>

                                {{-- Nama Prodi --}}
                                <tr style="
                                        border-bottom: 1px solid rgba(255,255,255,0.1);
                                   ">

                                    <th width="35%"
                                        class="fs-5 text-info fw-semibold py-3">

                                        🐠 Nama Prodi

                                    </th>

                                    <td width="5%" class="fw-bold">
                                        :
                                    </td>

                                    <td class="fs-5 fw-bold text-light">

                                        {{ $prodi->nama_prodi }}

                                    </td>

                                </tr>


                                {{-- Nama Kaprodi --}}
                                <tr style="
                                        border-bottom: 1px solid rgba(255,255,255,0.1);
                                   ">

                                    <th class="fs-5 text-info fw-semibold py-3">

                                        🪸 Nama Kaprodi

                                    </th>

                                    <td class="fw-bold">
                                        :
                                    </td>

                                    <td class="fs-5 fw-bold text-light">

                                        {{ $prodi->nama_kaprodi }}

                                    </td>

                                </tr>


                                {{-- Alias --}}
                                <tr>

                                    <th class="fs-5 text-info fw-semibold py-3">

                                        🐚 Alias / Kode

                                    </th>

                                    <td class="fw-bold">
                                        :
                                    </td>

                                    <td class="fs-5 fw-bold text-light">

                                        <span class="badge px-4 py-2 rounded-4 fs-6"
                                              style="
                                                background: rgba(255,255,255,0.15);
                                                color: #90e0ef;
                                                backdrop-filter: blur(8px);
                                              ">

                                            {{ $prodi->alias_prodi }}

                                        </span>

                                    </td>

                                </tr>

                            </tbody>

                        </table>


                        {{-- BUTTON --}}
                        <div class="mt-4 d-flex gap-2 flex-wrap">

                            {{-- BACK --}}
                            <a href="{{ route('prodi.index') }}"
                               class="btn rounded-4 px-4 text-white border-0 shadow-sm"
                               style="
                                    background: rgba(255,255,255,0.15);
                                    backdrop-filter: blur(8px);
                               ">

                                ← Kembali

                            </a>


                            {{-- EDIT --}}
                            <a href="{{ route('prodi.edit', $prodi->id) }}"
                               class="btn rounded-4 px-4 text-white border-0 shadow-sm"
                               style="
                                    background: linear-gradient(135deg, #00b4d8, #0077b6);
                               ">

                                ✏ Edit

                            </a>

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

        </div>

    </div>

</x-layout>