@section('title','Edit Detail Dosen')

<div class="mt-5 ms-3">
    <div>
        <h2>Edit Detail Dosen</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('dosen.detail',['username_dosen'=>$dosen_username]) }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <form wire:submit.prevent="update" class="mt-3">
        <input type="hidden" name="dosen_id" wire:model='dosen_id' id='dosen_id'>
        <div class="form-group mt-3">
            <label for="dosen_username">Username</label>
            <input type="text" name="dosen_username" wire:model="dosen_username" id="dosen_username" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="dosen_email">E-mail Dosen</label>
            <input type="email" name="dosen_email" wire:model="dosen_email" id="dosen_email" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="dosen_full_name">Nama Lengkap</label>
            <input type="text" name="dosen_full_name" wire:model="dosen_full_name" id="dosen_full_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="nidn">NIDN</label>
            <input type="text" name="nidn" wire:model="nidn" id="nidn" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="dosen_address">Alamat Dosen</label>
            <textarea name="dosen_address" wire:model="dosen_address" id="dosen_address" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="dosen_phone_number">Nomor Handphone Dosen</label>
            <input type="text" name="dosen_phone_number" wire:model="dosen_phone_number" id="dosen_phone_number" class="form-control">
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Update</button>
    </form>

</div>
