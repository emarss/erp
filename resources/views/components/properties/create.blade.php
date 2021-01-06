<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Add New Property
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="name">Property Name</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">label</i>
                            </div>
                            <input wire:model="name" type="text" class="form-control" name="name"
                                placeholder="Name">
                        </div>
                        @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="location">Location</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">location_on</i>
                            </div>
                            <input wire:model="location" type="text" class="form-control" name="location"
                                placeholder="Where the property is located">
                        </div>
                        @error('location') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Property Description</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">description</i>
                        </div>
                        <input wire:model="description" type="text" class="form-control" name="description"
                            placeholder="Description">
                    </div>
                    @error('description') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="date_acquired">Date Acquired</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">date_range</i>
                            </div>
                            <input wire:model="date_acquired" type="date" class="form-control" name="date_acquired"
                                placeholder="Date of acquisation">
                        </div>
                        @error('date_acquired') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="unit_of_measure_id">Unit of Measure</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">assessment</i>
                            </div>
                            <select name="unit_of_measure_id" wire:model="unit_of_measure_id" class="form-control">
                                <option value="">--Select UoM--</option>
                                @foreach(\App\Models\UnitOfMeasure::all() as $uom)
                                    <option value="{{ $uom->id }}">{{ $uom->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('unit_of_measure_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="quantity">Quantity</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">format_list_numbered</i>
                            </div>
                            <input wire:model="quantity" type="number" step="0.01" class="form-control" name="quantity">
                        </div>
                        @error('quantity') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="value">Value per Unit</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input wire:model="value" type="number" step="0.01" class="form-control" name="value"
                                placeholder="Value of each property in currency.">
                        </div>
                        @error('value') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <hr class="opacity-0 my-1">
                <div class="form-group">
                    <label for="departments">Department(s)</label>
                    <div class="input-group input-group--inline">
                        @foreach(\App\Models\Department::all() as $department)
                        <label class="checkbox mr-5"><input type="checkbox" name="departments[]" class="mr-1"
                                wire:model="departments" value="{{ $department->id }}">{{ $department->name }}</label>
                        @endforeach
                    </div>
                    @error('departments') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </form>
            <button class="btn btn-primary btn-sm" wire:click="saveProperty">Save</button>
        </div>
    </div>
</div>
