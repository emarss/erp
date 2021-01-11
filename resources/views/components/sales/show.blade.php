<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Sale for: {{ $sale->product->description }}
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
                            <input min="1" disabled value="{{ $sale->product->description }}" placeholder="Control Quantity" type="number" step="0.01" class="form-control" name="quantity">
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="profit">Earned Profit</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input readonly disabled value="{{ $sale->profit }}" placeholder="Unit Selling Price" type="number" step="0.01" class="form-control" name="unit_selling_price">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-8">
                        <label for="quantity">Quantity</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">format_list_numbered</i>
                            </div>
                            <input min="1" disabled value="{{ $sale->quantity }}" placeholder="Control Quantity" type="number" step="0.01" class="form-control" name="quantity">
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="total_selling_price">Calculated Selling Price</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input readonly disabled value="{{ $sale->total_selling_price }}" type="number" placeholder="Calculated Selling Price" step="0.01" class="form-control" name="total_selling_price">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-8">
                        <label for="actual_selling_price">Actual Selling Price</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input disabled value="{{ $sale->actual_selling_price }}" type="number" step="0.01" class="form-control" name="actual_selling_price"
                                placeholder="Actual Selling Price">
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="discount">Calculated Discount</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input readonly disabled value="{{ $sale->discount }}" type="number" step="0.01" class="form-control" name="discount"
                                placeholder="Calculated Discount">
                        </div>
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
                <span>{{ $sale->updated_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Created:</span>
                <span>{{ $sale->created_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Added By:</span>
                <span>{{ $sale->adder->getFullName() }}</span>
            </div>
        </div>
    </div>
</div>
