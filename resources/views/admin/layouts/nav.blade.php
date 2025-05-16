{{-- resources/views/components/navbar.blade.php --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold text-white"
            href="{{ Auth::check() ? (Auth::user()->role === 'Admin' ? route('admin.dashboard') : (Auth::user()->role === 'guru' ? route('guru.index') : route('siswa.index'))) : url('/') }}">
            Absensi
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                @auth
                    <li class="nav-item">
                        <span class="nav-link active">Halo, {{ Auth::user()->name }}</span>
                    </li>

                    {{-- Form logout --}}
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link"
                                style="display: inline; cursor: pointer;">Keluar</button>
                        </form>
                    </li>
                @else
                    {{-- Jika belum login --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
