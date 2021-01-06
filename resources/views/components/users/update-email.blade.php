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
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="email">Email</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </div>
                            <input wire:model="email"
                                type="text" class="form-control" name="email"
                                placeholder="Email">
                        </div>
                        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email_confirmation">Confirm Email</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </div>
                            <input wire:model="email_confirmation"
                                type="text" class="form-control" name="email_confirmation"
                                placeholder="Repeat Email">
                        </div>
                        @error('middle_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
            </form>
            <button wire:click="saveEmail" class="btn btn-sm btn-primary">Update Email</button>
        </div>
    </div>
</div>
