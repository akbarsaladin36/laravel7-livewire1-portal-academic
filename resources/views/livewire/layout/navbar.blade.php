
@if(Session::exists('user_logged_in'))
  <div class="position-fixed col-2">
      <div class="list-group mt-5">
          <a href="{{ route('home.index') }}" class="list-group-item list-group-item-action @if(Route::is('home.index')) active @endif">Home</a>
          <a href="{{ route('pa-periode-kuliah.index') }}" class="list-group-item list-group-item-action @if(Route::is('pa-periode-kuliah.index')||Route::is('pa-periode-kuliah.create')||Route::is('pa-periode-kuliah.detail'))||Route::is('pa-periode-kuliah.edit')) active @endif">List Periode Kuliah</a>
          <a href="{{ route('users.index') }}" class="list-group-item list-group-item-action @if(Route::is('users.index')||Route::is('users.create')||Route::is('users.edit')) active @endif">List Mahasiswa</a>
          <a href="{{ route('dosen.index') }}" class="list-group-item list-group-item-action @if(Route::is('dosen.index')||Route::is('dosen.create')||Route::is('dosen.detail')||Route::is('dosen.edit')) active @endif">List Dosen</a>
          <a href="{{ route('pa-kelas.index') }}" class="list-group-item list-group-item-action @if(Route::is('pa-kelas.index')||Route::is('pa-kelas.create')||Route::is('pa-kelas.detail')||Route::is('pa-kelas.edit')) active @endif">List Kelas</a>
          <a href="{{ route('krs.index') }}" class="list-group-item list-group-item-action @if(Route::is('krs.index')||Route::is('krs.create')||Route::is('krs.edit')||Route::is('krs.detail')) active @endif">List KRS</a>
          <a href="{{ route('pa-khs.index') }}" class="list-group-item list-group-item-action @if(Route::is('pa-khs.index')||Route::is('pa-khs.create')||Route::is('pa-khs.edit')||Route::is('pa-khs.detail')) active @endif">List KHS</a>
          <a href="{{ route('pa-fakultas.index') }}" class="list-group-item list-group-item-action @if(Route::is('pa-fakultas.index')||Route::is('pa-fakultas.create')||Route::is('pa-fakultas.edit')||Route::is('pa-fakultas.detail')) active @endif">List Fakultas</a>
          <a href="{{ route('pa-jurusan.index') }}" class="list-group-item list-group-item-action @if(Route::is('pa-jurusan.index')||Route::is('pa-jurusan.create')||Route::is('pa-jurusan.edit')||Route::is('pa-jurusan.detail')) active @endif">List Jurusan</a>
          <a href="{{ route('profile.index',['username'=> $user_username]) }}" class="list-group-item list-group-item-action @if(Route::is('profile.index')||Route::is('profile.edit')) active @endif">Profil</a>
          <button class="list-group-item list-group-item-action list-group-item-danger" wire:click="logout"  class="btn btn-primary">Logout</button>
      </div>
  </div>
@elseif(Session::exists('dosen_logged_in'))
  <div class="position-fixed col-2">
    <div class="list-group mt-5">
        <a href="{{ route('user-dosen.home.index') }}" class="list-group-item list-group-item-action @if(Route::is('user-dosen.home.index')) active @endif">Home</a>
        <button class="list-group-item list-group-item-action list-group-item-danger" wire:click="logout"  class="btn btn-primary">Logout</button>
      </div>
  </div>
@elseif(Session::exists('mahasiswa_logged_in'))
<div class="position-fixed col-2">
  <div class="list-group mt-5">
      <a href="{{ route('user-mahasiswa.home.index') }}" class="list-group-item list-group-item-action @if(Route::is('user-mahasiswa.home.index')) active @endif">Home</a>
      <a href="{{ route('user-mahasiswa.krs.index') }}" class="list-group-item list-group-item-action @if(Route::is('user-mahasiswa.krs.index')||Route::is('user-mahasiswa.krs.create')) active @endif">Pengelolaan KRS</a>
      <a href="#" class="list-group-item list-group-item-action">Informasi KHS</a>
      <a href="#" class="list-group-item list-group-item-action">Transkrip Nilai</a>
      <a href="#" class="list-group-item list-group-item-action">Informasi Mata Kuliah Ditawarkan</a>
      <a href="{{ route('user-mahasiswa.profile.index',['username'=> $user_username]) }}" class="list-group-item list-group-item-action @if(Route::is('user-mahasiswa.profile.index')||Route::is('user-mahasiswa.profile.edit')) active @endif">Profil</a>
      <button class="list-group-item list-group-item-action list-group-item-danger" wire:click="logout"  class="btn btn-primary">Logout</button>
    </div>
</div>
@else
  <div>
    
  </div>
@endif
