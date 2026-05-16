<x-layout>
    <div class="container py-5">
        
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card border-0 shadow-lg rounded-4">

                    {{-- Header --}}
                    <div class="card-header bg-primary text-white text-center py-4 rounded-top-4">
                        <h2 class="fw-bold mb-1">
                            📘 Detail Fakultas
                        </h2>
                        <p class="mb-0 small">
                            Informasi lengkap data fakultas
                        </p>
                    </div>

                    {{-- Body --}}
                    <div class="card-body p-4">

                        <table class="table table-borderless align-middle">
                            <tbody>

                                <tr class="border-bottom">
                                    <th width="35%" class="text-secondary fs-5">
                                        Nama Fakultas
                                    </th>

                                    <td width="5%" class="fw-bold">
                                        :
                                    </td>

                                    <td class="fs-5 fw-semibold text-dark">
                                        {{ $fakultas->nama_fakultas }}
                                    </td>
                                </tr>

                                <tr>
                                    <th class="text-secondary fs-5">
                                        Nama Dekan
                                    </th>

                                    <td class="fw-bold">
                                        :
                                    </td>

                                    <td class="fs-5 fw-semibold text-dark">
                                        {{ $fakultas->nama_dekan }}
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        {{-- Tombol --}}
                        <div class="mt-4 d-flex gap-2">

                            <a href="/fakultas" 
                               class="btn btn-secondary rounded-3 px-4">
                                ← Kembali
                            </a>

                            <a href="/fakultas/{{ $fakultas->id }}/edit" 
                               class="btn btn-warning rounded-3 px-4 text-white">
                                ✏ Edit
                            </a>

                        </div>

                    </div>

                    {{-- Footer --}}
                    <div class="card-footer bg-light text-center rounded-bottom-4">
                        <small class="text-muted">
                            Sistem Informasi Fakultas
                        </small>
                    </div>

                </div>

            </div>
        </div>

    </div>
</x-layout>