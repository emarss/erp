<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Supplier: {{ $supplier->name }}
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="name">Name</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <input readonly value="{{ $supplier->name }}" type="text" class="form-control" name="name"
                                placeholder="Supplier's Name">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email">Email</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">email</i>
                            </div>
                            <input readonly value="{{ $supplier->email }}" type="email" class="form-control"
                                name="email" placeholder="Supplier's Email">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="phone">Phone Number</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">local_phone</i>
                            </div>
                            <input readonly value="{{ $supplier->phone }}" type="text" class="form-control"
                                name="phone" placeholder="Supplier's Phone Number">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="address">Address</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">domain</i>
                            </div>
                            <input readonly value="{{ $supplier->address }}" type="text" class="form-control"
                                name="address" placeholder="Supplier's Address">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="city">City</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">location_on</i>
                            </div>
                            <input readonly value="{{ $supplier->city }}" type="text" class="form-control" name="city"
                                placeholder="City">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="country">Country</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">location_on</i>
                            </div>
                            <input readonly value="{{ $supplier->country }}" type="text" class="form-control"
                                name="country" placeholder="Country">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remarks">Remarks</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">comments</i>
                        </div>
                        <input readonly value="{{ $supplier->remarks }}" type="text" class="form-control" name="remarks"
                            placeholder="More Details">
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
                <span>{{ $supplier->updated_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Created:</span>
                <span>{{ $supplier->created_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Added By:</span>
                <span>{{ $supplier->adder->getFullName() }}</span>
            </div>
        </div>
    </div>
</div>
