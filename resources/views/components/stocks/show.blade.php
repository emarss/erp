<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Showing Stock : {{ $stock->description }}
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
                            <input disabled value="{{ $stock->description }}" type="text" class="form-control" name="description"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="unit_of_measure_id">Unit of Measure</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">assessment</i>
                            </div>
                            <input disabled value="{{ $stock->unitOfMeasure->title }}" type="text" class="form-control" name="description"
                                placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="control_quantity">Control Quantity</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">format_list_numbered</i>
                            </div>
                            <input disabled value="{{ $stock->control_quantity }}" placeholder="Control Quantity" type="number" step="0.01" class="form-control" name="control_quantity">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="physical_quantity">Physical Quantity</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">format_list_numbered</i>
                            </div>
                            <input disabled value="{{ $stock->physical_quantity }}" type="number" placeholder="Physical Quantity" step="0.01" class="form-control" name="physical_quantity">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="unit_buying_price">Unit Buying Price</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input disabled value="{{ $stock->unit_buying_price }}" type="number" step="0.01" class="form-control" name="unit_buying_price"
                                placeholder="Unit Buying Price">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="unit_selling_price">Unit Selling Price</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input disabled value="{{ $stock->unit_selling_price }}" type="number" step="0.01" class="form-control" name="unit_selling_price"
                                placeholder="Unit Selling Price">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remarks">Remarks / Comments</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">comments</i>
                        </div>
                        <input disabled value="{{ $stock->remarks }}" type="text" class="form-control" name="remarks"
                            placeholder="Description">
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
                <span>{{ $stock->updated_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Created:</span>
                <span>{{ $stock->created_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Added By:</span>
                <span>{{ $stock->adder->getFullName() }}</span>
            </div>
        </div>
    </div>
</div>
