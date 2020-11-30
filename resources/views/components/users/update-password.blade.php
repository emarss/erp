<div class="col-lg-12">
    <div class="card card-account">
        <div class="card-header">
	    	<h4 class="card-title font-weight-bold">
	    		{{ $pageTitle }}
	    		<button class="btn btn-primary btn-sm float-right" wire:click="viewProfile">Back</button>
	    	</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </div>
                        <input wire:model="current_password"
                            type="text" class="form-control" name="current_password"
                            placeholder="Current Password">
                    </div>
                    @error('current_password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </div>
                        <input wire:model="password"
                            type="text" class="form-control" name="password"
                            placeholder="Password">
                    </div>
                    @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </div>
                        <input wire:model="password_confirmation"
                            type="text" class="form-control" name="password_confirmation"
                            placeholder="Repeat Password">
                    </div>
                    @error('middle_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </form>
            <button wire:click="savePassword" class="btn btn-sm btn-primary">Update Password</button>
        </div>
    </div>
</div>
