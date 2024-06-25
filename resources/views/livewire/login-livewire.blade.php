<main class="form-signin">
    <form>
        {{-- <img class="mb-4" src="{{ asset('vendor/assets/img/kaiadmin/logo_light.svg') }}" alt="" width="72" height="57"> --}}
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" wire:model.live="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" wire:model.live="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="button" wire:click="login">Sign in</button>
        <p class="mt-5 mb-3 text-muted">© 2024</p>
    </form>
</main>