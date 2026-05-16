<x-layout>
    <div class="container py-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold text-primary mb-1">
                    📚 List Fakultas
                </h2>

                <p class="text-muted mb-0">
                    Data seluruh fakultas universitas
                </p>
            </div>

            <a href="/fakultas/create" class="btn btn-primary rounded-3 shadow-sm">
                + Tambah Fakultas
            </a>

        </div>

        {{-- Card --}}
        <div class="card border-0 shadow-lg rounded-4">

            <div class="card-body p-4">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-primary">
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama Fakultas</th>
                                <th>Nama Dekan</th>
                                <th width="30%" class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($fakultas as $item)

                                <tr>

                                    <td class="fw-semibold">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        <span class="fw-bold text-dark">
                                            {{ $item->nama_fakultas }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $item->nama_dekan }}
                                    </td>

                                    <td class="text-center">

                                        <div class="d-flex justify-content-center gap-2">

                                            {{-- Detail --}}
                                            <a href="/fakultas/{{ $item->id }}"
                                               class="btn btn-info btn-sm rounded-3 text-white">
                                                👁 Detail
                                            </a>

                                            {{-- Edit --}}
                                            <a href="/fakultas/{{ $item->id }}/edit"
                                               class="btn btn-warning btn-sm rounded-3 text-white">
                                                ✏ Edit
                                            </a>

                                            {{-- Hapus --}}
                                            <form action="/fakultas/{{ $item->id }}" 
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                                @csrf
                                                @method("DELETE")

                                                <button type="submit"
                                                        class="btn btn-danger btn-sm rounded-3">
                                                    🗑 Hapus
                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">
                                        Data fakultas belum tersedia
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

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
</x-layout>