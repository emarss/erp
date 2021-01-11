<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Add New Client
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="first_name">First Name</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <input wire:model="first_name" type="text" class="form-control" name="first_name"
                                placeholder="First Name">
                        </div>
                        @error('first_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="middle_name">Middle Name</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <input wire:model="middle_name" type="text" class="form-control" name="middle_name"
                                placeholder="Middle Name">
                        </div>
                        @error('middle_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="last_name">Last Name</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <input wire:model="last_name" type="text" class="form-control" name="last_name"
                                placeholder="Last Name">
                        </div>
                        @error('last_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="sex">Gender (Sex)</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <select name="sex" wire:model="sex" class="form-control">
                                <option value="">--Select Gender--</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        @error('sex') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <hr class="opacity-0 my-1">
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="email">Email</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">email</i>
                            </div>
                            <input wire:model="email" type="text" class="form-control" name="email"
                                placeholder="Email Address">
                        </div>
                        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="phone">Phone</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">local_phone</i>
                            </div>
                            <input wire:model="phone" type="text" class="form-control" name="phone"
                                placeholder="Phone">
                        </div>
                        @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">location_on</i>
                        </div>
                        <input wire:model="address" type="text" class="form-control" name="address"
                                placeholder="Address">
                    </div>
                    @error('address') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <hr class="opacity-0 my-1">
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="national_id">National Id Number</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">credit_card</i>
                            </div>
                            <input wire:model="national_id" type="text" class="form-control" name="national_id"
                                placeholder="National Id Number">
                        </div>
                        @error('national_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="next_of_kin">Next of Kin</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">nature_people</i>
                            </div>
                            <input wire:model="next_of_kin" type="text" class="form-control" name="next_of_kin"
                                placeholder="Next of Kin">
                        </div>
                        @error('next_of_kin') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
            </form>
            <button class="btn btn-primary btn-sm" wire:click="saveClient">Save</button>
        </div>
    </div>
</div>
