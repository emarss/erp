<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Property: {{ $property->name }}
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
                <button wire:click="edit({{ $property->id }})"
                    class="btn btn-sm btn-primary float-right mr-2">Edit</button>
                <button wire:click="delete({{ $property->id }})"
                    class="btn btn-sm btn-danger float-right mr-2">Delete</button>
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
                            <input disabled value="{{ $property->name }}" type="text" class="form-control" name="name"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="location">Location</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">location_on</i>
                            </div>
                            <input disabled value="{{ $property->location }}" type="text" class="form-control"
                                name="location" placeholder="Where the property is located">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Property Description</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">description</i>
                        </div>
                        <input disabled value="{{ $property->description }}" type="text" class="form-control"
                            name="description" placeholder="Description">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="date_acquired">Date Acquired</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">date_range</i>
                            </div>
                            <input disabled value="{{ $property->date_acquired }}" type="text" class="form-control"
                                name="date_acquired" placeholder="Date of acquisation">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="unit_of_measure_id">Unit of Measure</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">assessment</i>
                            </div>
                            <input disabled value="{{ $property->UnitOfMeasure->title }}" type="text"
                                class="form-control">
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
                            <input disabled value="{{ $property->quantity }}" type="number" step="0.01"
                                class="form-control" name="quantity">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="value">Value per Unit</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input disabled value="{{ $property->value }}" type="number" step="0.01"
                                class="form-control" name="value" placeholder="Value of each property in currency.">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remarks">Remarks (Comments)</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">comments</i>
                        </div>
                        <input disabled value="{{ $property->remarks }}" type="text" class="form-control"
                            name="remarks">
                    </div>
                </div>
                <hr class="opacity-0 my-1">
                <div class="form-group">
                    <label for="departments">Department(s)</label>
                    <div class="input-group input-group--inline">
                        @foreach($property->departments as $department)
                        <b class="mr-5">{{ $department->name }}{{ $loop->last ? "": ", " }}</b>
                        @endforeach
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
                <span>{{ $property->updated_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Created:</span>
                <span>{{ $property->created_at->diffForHumans() }}</span>
            </div>
            <div class="col-lg-3">
                <span class="font-weight-bold">Added By:</span>
                <span>{{ $property->adder->getFullName() }}</span>
            </div>
        </div>
    </div>
</div>
