@section('title','Edit Profile')

<div class="mt-5 ms-3">
    <div>
        <h2>Edit Profile</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('profile.index',['username'=>$user_username]) }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <form wire:submit.prevent="update" class="mt-3">
        <input type="hidden" name="user_id" wire:model="user_id" id="user_id">
        <div class="form-group mt-3">
            <label for="user_username">Username</label>
            <input type="text" name="user_username" wire:model="user_username" id="user_username" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_email">E-mail</label>
            <input type="email" name="user_email" wire:model="user_email" id="user_email" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_first_name">First Name</label>
            <input type="text" name="user_first_name" wire:model="user_first_name" id="user_first_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_last_name">Last Name</label>
            <input type="text" name="user_last_name" wire:model="user_last_name" id="user_last_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_nim">NIM</label>
            <input type="text" name="user_nim" wire:model="user_nim" id="user_nim" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_nik">NIK</label>
            <input type="text" name="user_nik" wire:model="user_nik" id="user_nik" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_religion">Agama</label>
            <select class="form-select" name="user_religion" wire:model="user_religion">
                <option value="tidak-ada-agama">Pilih Agama</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="buddha">Buddha</option>
                <option value="other">Lainnya</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="user_address">Alamat</label>
            <textarea name="user_address" wire:model="user_address" id="user_address" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="user_phone_number">Nomor HP</label>
            <input type="text" name="user_phone_number" wire:model="user_phone_number" id="user_phone_number" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_father_name">Nama Ayah</label>
            <input type="text" name="user_father_name" wire:model="user_father_name" id="user_father_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_father_address">Alamat Ayah</label>
            <textarea name="user_father_address" wire:model="user_father_address" id="user_father_address" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="user_father_job">Pekerjaan Ayah</label>
            <input type="text" name="user_father_job" wire:model="user_father_job" id="user_father_job" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_mother_name">Nama Ibu</label>
            <input type="text" name="user_mother_name" wire:model="user_mother_name" id="user_mother_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_mother_address">Alamat Ibu</label>
            <textarea name="user_mother_address" wire:model="user_mother_address" id="user_mother_address" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="user_mother_job">Pekerjaan Ibu</label>
            <input type="text" name="user_mother_job" wire:model="user_mother_job" id="user_mother_job" class="form-control">
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Update</button>
    </form>

</div>
