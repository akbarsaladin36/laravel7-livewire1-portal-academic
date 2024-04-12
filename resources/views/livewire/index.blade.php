@section('title','Welcome To Portal Academic')

<div>
    <div class="text-center mt-5">
        <h1>Welcome To Portal Academic</h1>
    </div>

    <div class="text-center mt-5 w-25 mx-auto">
        <form wire:submit.prevent="login" method="post">
            <div class="form-group mt-3">
                <label for="user_username">Username</label>
                <input type="text" name="user_username" id="user_username" wire:model='user_username' class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="user_password">Password</label>
                <input type="password" name="user_password" id="user_password" wire:model='user_password' class="form-control">
            </div>
            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <button type="submit" class="btn btn-primary form-control mt-3">Login</button>
        </form>
    </div>
</div>
