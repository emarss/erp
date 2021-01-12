<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Received Product Record for: {{ $receivedProduct->product->description }}
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="stock_name">Product</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">label</i>
                            </div>
                            <input readonly disabled value="{{ $receivedProduct->product->description }}" placeholder="Unit Selling Price" type="text" step="0.01" class="form-control" name="stock_name">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="unit_selling_price">Unit Selling Price</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input readonly disabled value="{{ $receivedProduct->unit_selling_price }}" placeholder="Unit Selling Price" type="number" step="0.01" class="form-control" name="unit_selling_price">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="quantity">Quantity</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">format_list_numbered</i>
                            </div>
                            <input min="1" disabled value="{{ $receivedProduct->quantity }}" placeholder="Control Quantity" type="number" step="0.01" class="form-control" name="quantity">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="total_value">Calculated Value</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input readonly disabled value="{{ $receivedProduct->unit_selling_price * $receivedProduct->quantity }}" type="number" placeholder="Calculated Value" step="0.01" class="form-control" name="total_value">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="date">Date Received</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">date_range</i>
                            </div>
                            <input disabled value="{{ $receivedProduct->date }}" type="date" class="form-control" name="date" placeholder="Date Received">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="supplier_id">Supplier (Optional)</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">business</i>
                            </div>
                            <input disabled value="{{ $receivedProduct->supplier->name }}" type="text" class="form-control" name="supplier_name" placeholder="Date Received">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remarks">Remarks</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">comments</i>
                        </div>
                        <input disabled value="{{ $receivedProduct->remarks }}" type="text" class="form-control" name="remarks" placeholder="More Details">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">Meta Data</h4>
        </div>
        <div class="card-body row">
            <div class="col-lg-3">
                <span class="font-weight-bold">Updated:</span>
                <span>{{ $receivedProduct->updated_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Created:</span>
                <span>{{ $receivedProduct->created_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Added By:</span>
                <span>{{ $receivedProduct->adder->getFullName() }}</span>
            </div>
        </div>
    </div>
</div>
