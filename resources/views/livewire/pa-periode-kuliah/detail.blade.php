@section('title','Detail Periode Kuliah')

<div class="mt-5 ms-3">
    <div>
        <h2>Detail Periode Kuliah</h2>
    </div>

    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-periode-kuliah.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <colgroup><col width="150"/><col width="500"/></colgroup>
            <tbody>
                <tr>
                    <td><b>Awal Tahun Kuliah</b></td>
                    <td>{{ $periode_kuliah_start_year_id }}</td>
                </tr>
                <tr>
                    <td><b>Akhir Tahun Kuliah</b></td>
                    <td>{{ $periode_kuliah_finish_year_id }}</td>
                </tr>
                <tr>
                    <td><b>Kode Semester</b></td>
                    <td>{{ $periode_kuliah_semester_code }}</td>
                </tr>
                <tr>
                    <td><b>Nama Semester</b></td>
                    <td>{{ $periode_kuliah_semester_name }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('pa-periode-kuliah.edit',['periode_kuliah_slug'=>$periode_kuliah_semester_slug]) }}" class="btn btn-success form-control">Edit Detail</a>
    </div>
</div>
