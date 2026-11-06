@extends('kategori.index')

@section('content')
<main class="main">
    <header class="page-header">
        <div>
            <h1>Kategori</h1>
            <p class="subtitle">Kelola kategori makanan Anda.</p>
        </div>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">+ Tambah Kategori</a>
    </header>

    <section class="card">
    
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="daftarKategori">
                    @forelse ($kategori as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description ?: '-' }}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{ route('categories.edit', $item->id) }}">Edit</a>
                                <form action="{{ route('categories.destroy', $item->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4">Belum ada kategori.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</main>
@endsection
