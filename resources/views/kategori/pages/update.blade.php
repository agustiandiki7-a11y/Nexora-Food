@extends('kategori.index')

@section('content')
<main class="main">
    <header class="page-header">
        <div>
            <h1>Edit Kategori</h1>
            <p class="subtitle">Perbarui informasi kategori.</p>
        </div>
    </header>

    <section class="card form-card">
        <form action="{{ route('categories.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama Kategori <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name', $kategori->name) }}" required maxlength="255">
                @error('name') <small class="error">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="description" name="description">{{ old('description', $kategori->description) }}</textarea>
                @error('description') <small class="error">{{ $message }}</small> @enderror
            </div>
            <div class="form-actions">
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update Kategori</button>
            </div>
        </form>
    </section>
</main>
@endsection
