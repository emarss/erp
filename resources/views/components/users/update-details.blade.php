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
                        <label for="first_name">First Name</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <input wire:model="first_name"
                                type="text" class="form-control" name="first_name"
                                value="{{ auth()->user()->first_name }}">
                        </div>
                        @error('first_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="middle_name">Middle Name</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <input wire:model="middle_name"
                                type="text" class="form-control" name="middle_name"
                                value="{{ auth()->user()->middle_name }}">
                        </div>
                        @error('middle_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">person</i>
                        </div>
                        <input wire:model="last_name"
                            type="text" class="form-control" name="last_name"
                            value="{{ auth()->user()->last_name }}">
                    </div>
                    @error('last_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </form>
            <button wire:click="saveDetails" class="btn btn-sm btn-primary">Update Details</button>
        </div>
    </div>
</div>
