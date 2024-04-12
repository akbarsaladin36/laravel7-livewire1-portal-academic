@section('title','Home')

<div class="mt-5 ms-3">
    <div>
        <h2>Selamat Datang di Portal Akademik</h2>
    </div>

    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div>
        <p>Selamat Datang, {{ $mahasiswa_username }}</p>
    </div>
</div>
