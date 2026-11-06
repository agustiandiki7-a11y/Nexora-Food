<!DOCTYPE html>
<html lang="id">
@include('kategori.partials.head')
<body>
    <div class="app">
        @include('kategori.components.sidebar')
        @yield('content')
    </div>
</body>
</html>
