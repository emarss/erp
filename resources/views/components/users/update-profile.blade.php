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
                    <label for="affiliation">Affiliation</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">domain</i>
                        </div>
                        <input wire:model="affiliation" type="text" class="form-control" name="affiliation"
                            value="{{ auth()->user()->profile->affiliation }}">
                    </div>
                    @error('affiliation')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="national_id">National Id</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">credit_card</i>
                        </div>
                        <input wire:model="national_id" type="text" class="form-control" name="national_id"
                            value="{{ auth()->user()->profile->national_id }}">
                    </div>
                    @error('national_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">account_box</i>
                        </div>
                        <input wire:model="phone" type="text" class="form-control" name="phone"
                            value="{{ auth()->user()->profile->phone }}">
                    </div>
                    @error('phone')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="next_of_kin">Next of Kin</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">nature_people</i>
                        </div>
                        <input wire:model="next_of_kin" type="text" class="form-control" name="next_of_kin"
                            value="{{ auth()->user()->profile->next_of_kin }}">
                    </div>
                    @error('next_of_kin')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">location_city</i>
                        </div>
                        <input wire:model="address" type="text" class="form-control" name="address"
                            value="{{ auth()->user()->profile->address }}">
                    </div>
                    @error('address')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sex">Sex</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">group</i>
                        </div>
                        <select  wire:model="sex" name="sex" class="form-control">
                            <option
                                {{ auth()->user()->profile->sex == "Female" ? "selected": "" }}
                                value="Female">Female</option>
                            <option
                                {{ auth()->user()->profile->sex == "Male" ? "selected": "" }}
                                value="Male">Male</option>
                            <option
                                {{ auth()->user()->profile->sex == "Other" ? "selected": "" }}
                                value="Other">Other</option>
                        </select>
                    </div>
                    @error('sex')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </form>
            <button wire:click="saveProfile" class="btn btn-sm btn-primary">Update Profile</button>
        </div>
    </div>
</div>
