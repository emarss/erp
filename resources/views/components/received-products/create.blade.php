<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Add New Received Product Record
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="stock_id">Product</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">label</i>
                            </div>
                            <select name="stock_id" wire:model="stock_id" class="form-control">
                                <option value="">Select Product/Stock ...</option>
                                @foreach(\App\Models\Stock::all() as $stock)
                                    <option value="{{ $stock->id }}">{{ $stock->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('stock_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="unit_selling_price">Unit Selling Price</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input readonly wire:model="unit_selling_price" placeholder="Unit Selling Price" type="number" step="0.01" class="form-control" name="unit_selling_price">
                        </div>
                        @error('unit_selling_price') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="quantity">Quantity</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">format_list_numbered</i>
                            </div>
                            <input min="1" wire:model="quantity" placeholder="Control Quantity" type="number" step="0.01" class="form-control" name="quantity">
                        </div>
                        @error('quantity') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="total_value">Calculated Value</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input readonly wire:model="total_value" type="number" placeholder="Calculated Value" step="0.01" class="form-control" name="total_value">
                        </div>
                        @error('total_value') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="date">Date Received</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">date_range</i>
                            </div>
                            <input wire:model="date" type="date" class="form-control" name="date" placeholder="Date Received">
                        </div>
                        @error('date') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="supplier_id">Supplier (Optional)</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">business</i>
                            </div>
                            <select name="supplier_id" wire:model="supplier_id" class="form-control">
                                <option value="">Select Supplier ...</option>
                                @foreach(\App\Models\Supplier::all() as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('supplier_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
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
            <button class="btn btn-primary btn-sm" wire:click="saveReceivedProduct">Save</button>
        </div>
    </div>
</div>
