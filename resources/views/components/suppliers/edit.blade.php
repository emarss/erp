<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Editing Supplier
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="name">Name</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <input wire:model="name" type="text" class="form-control" name="name"
                                placeholder="Supplier's Name">
                        </div>
                        @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email">Email</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">email</i>
                            </div>
                            <input wire:model="email" type="email" class="form-control" name="email"
                                placeholder="Supplier's Email">
                        </div>
                        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="phone">Phone Number</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">local_phone</i>
                            </div>
                            <input wire:model="phone" type="text" class="form-control" name="phone"
                                placeholder="Supplier's Phone Number">
                        </div>
                        @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="address">Address</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">domain</i>
                            </div>
                            <input wire:model="address" type="text" class="form-control" name="address"
                                placeholder="Supplier's Address">
                        </div>
                        @error('address') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="city">City</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">location_on</i>
                            </div>
                            <input wire:model="city" type="text" class="form-control" name="city"
                                placeholder="City">
                        </div>
                        @error('city') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="country">Country</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">location_on</i>
                            </div>
                            <input wire:model="country" type="text" class="form-control" name="country" placeholder="Country">
                        </div>
                        @error('country') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="remarks">Remarks</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">comments</i>
                        </div>
                        <input wire:model="remarks" type="text" class="form-control" name="remarks" placeholder="More Details">
                    </div>
                    @error('remarks') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </form>
            <button class="btn btn-primary btn-sm" wire:click="updateSupplier">Update</button>
        </div>
    </div>
</div>
