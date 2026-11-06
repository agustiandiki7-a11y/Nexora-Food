@extends('kategori.index')

@section('content')
<main class="main">
    <header class="page-header">
        <div>
            <h1>Tambah Kategori</h1>
            <p class="subtitle">Masukkan informasi kategori baru.</p>
        </div>
    </header>

    <section class="card form-card">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Kategori <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Contoh: Makanan Berat" required maxlength="255">
                @error('name') <small class="error">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="description" name="description" placeholder="Deskripsi kategori">{{ old('description') }}</textarea>
                @error('description') <small class="error">{{ $message }}</small> @enderror
            </div>
            <div class="form-actions">
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan Kategori</button>
            </div>
        </form>
    </section>
</main>
@endsection
