<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Edit Stock
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="description">Description</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">description</i>
                            </div>
                            <input wire:model="description" type="text" class="form-control" name="description"
                                placeholder="Name">
                        </div>
                        @error('description') <span class="invalid-feedback">{{ $message }}</span> @enderror
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
                        <label for="control_quantity">Control Quantity</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">format_list_numbered</i>
                            </div>
                            <input wire:model="control_quantity" placeholder="Control Quantity" type="number" step="0.01" class="form-control" name="control_quantity">
                        </div>
                        @error('control_quantity') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="physical_quantity">Physical Quantity</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">format_list_numbered</i>
                            </div>
                            <input wire:model="physical_quantity" type="number" placeholder="Physical Quantity" step="0.01" class="form-control" name="physical_quantity">
                        </div>
                        @error('physical_quantity') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="unit_buying_price">Unit Buying Price</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input wire:model="unit_buying_price" type="number" step="0.01" class="form-control" name="unit_buying_price"
                                placeholder="Unit Buying Price">
                        </div>
                        @error('unit_buying_price') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="unit_selling_price">Unit Selling Price</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input wire:model="unit_selling_price" type="number" step="0.01" class="form-control" name="unit_selling_price"
                                placeholder="Unit Selling Price">
                        </div>
                        @error('unit_selling_price') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="remarks">Remarks / Comments</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">comments</i>
                        </div>
                        <input wire:model="remarks" type="text" class="form-control" name="remarks"
                            placeholder="Description">
                    </div>
                    @error('remarks') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </form>
            <button class="btn btn-primary btn-sm" wire:click="updateStock">Save</button>
        </div>
    </div>
</div>
