<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Add New Sale
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-8">
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
                    <div class="form-group col-lg-4">
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
                    <div class="form-group col-lg-8">
                        <label for="quantity">Quantity</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">format_list_numbered</i>
                            </div>
                            <input min="1" wire:model="quantity" placeholder="Control Quantity" type="number" step="0.01" class="form-control" name="quantity">
                        </div>
                        @error('quantity') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="total_selling_price">Calculated Selling Price</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input readonly wire:model="total_selling_price" type="number" placeholder="Calculated Selling Price" step="0.01" class="form-control" name="total_selling_price">
                        </div>
                        @error('total_selling_price') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-8">
                        <label for="actual_selling_price">Actual Selling Price</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input wire:model="actual_selling_price" type="number" step="0.01" class="form-control" name="actual_selling_price"
                                placeholder="Actual Selling Price">
                        </div>
                        @error('actual_selling_price') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="discount">Calculated Discount</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input readonly wire:model="discount" type="number" step="0.01" class="form-control" name="discount"
                                placeholder="Calculated Discount">
                        </div>
                        @error('discount') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
            </form>
            <button class="btn btn-primary btn-sm" wire:click="saveSale">Save</button>
        </div>
    </div>
</div>
