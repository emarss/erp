<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Change User Password
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="password">Password</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </div>
                            <input wire:model="password" type="password" class="form-control" name="password"
                                placeholder="Password">
                        </div>
                        @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="password_confirmation">Repeat Password</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </div>
                            <input wire:model="password_confirmation" type="password" class="form-control" name="password_confirmation"
                                placeholder="Repeat Password">
                        </div>
                        @error('password_confirmation') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
            </form>
            <button class="btn btn-primary btn-sm" wire:click="updateUserPassword">Update</button>
        </div>
    </div>
</div>
