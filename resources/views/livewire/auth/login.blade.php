<div class="card mx-auto col-6 mt-3">
    <div class="card-header">
        Login
    </div>

    <div class="card-body">
        <form wire:submit='loginUser'>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email address</label>
                <input wire:model='email' type="email" class="form-control" id="exampleInputEmail">
                <div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Password</label>
                <input wire:model='password' type="password" class="form-control" id="exampleInputPassword">
                <div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="mt-3">
            You do not Have an account! <button wire:navigate href="/register" class="btn btn-primary btn-sm">Register
                here</button>
        </div>
    </div>
</div>
