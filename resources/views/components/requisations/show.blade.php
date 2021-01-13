<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Requisation for {{ $requisation->employee->getFullName() }}
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="date">Date</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">date_range</i>
                            </div>
                            <input disabled value="{{ $requisation->date }}" placeholder="Control Quantity" type="date" class="form-control" name="date">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="employee_id">Employee</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <input disabled value="{{ $requisation->employee->getFullName() }}" type="text" class="form-control" name="employee_id" placeholder="Unit Buying Price">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="amount">Amount</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input disabled value="{{ $requisation->amount }}" type="text" class="form-control" name="amount" placeholder="Unit Buying Price">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="authorised_by">Authorised By</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">assessment</i>
                            </div>
                            <input disabled value="{{ $requisation->authoriser->getFullName() }}" type="text" class="form-control" name="authorised_by" placeholder="Unit Buying Price">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="currency">Currency</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">assessment</i>
                            </div>
                            <input disabled value="{{ $requisation->currency }}" type="text" class="form-control" name="currency" placeholder="Unit Buying Price">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="payment_method">Payment Method</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">assessment</i>
                            </div>
                            <input disabled value="{{ $requisation->payment_method }}" type="text" class="form-control" name="payment_method" placeholder="Unit Buying Price">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="narration">Narration</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">description</i>
                        </div>
                        <input disabled value="{{ $requisation->narration }}" type="text" class="form-control" name="narration" placeholder="Description">
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
                <span>{{ $requisation->updated_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Created:</span>
                <span>{{ $requisation->created_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Added By:</span>
                <span>{{ $requisation->adder->getFullName() }}</span>
            </div>
        </div>
    </div>
</div>
