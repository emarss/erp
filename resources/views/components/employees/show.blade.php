<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Employee: {{ $employee->getFullName() }}
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
                <button wire:click="edit({{ $employee->id }})" class="btn btn-sm btn-primary float-right mr-2">Edit</button>
                <button wire:click="delete({{ $employee->id }})" class="btn btn-sm btn-danger float-right mr-2">Delete</button>
            </h4>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card-body">
                    <form method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="first_name">First Name</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </div>
                                    <input readonly value="{{ $employee->first_name }}" type="text" class="form-control" name="first_name">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="middle_name">Middle Name</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </div>
                                    <input readonly value="{{ $employee->middle_name }}" type="text" class="form-control" name="middle_name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="last_name">Last Name</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </div>
                                    <input readonly value="{{ $employee->last_name }}" type="text" class="form-control" name="last_name">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="position">Position (Job Title)</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">domain</i>
                                    </div>
                                    <input readonly value="{{ $employee->position }}" type="text" class="form-control" name="position">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="status">Status</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">verified_user</i>
                                    </div>
                                    <input readonly value="{{ $employee->status ? "Active" : "Not Active" }}" type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="sex">Gender (Sex)</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </div>
                                    <input readonly value="{{ Str::ucfirst($employee->sex) }}" type="text" class="form-control" name="email">
                                </div>
                            </div>
                        </div>
                        <hr class="opacity-0 my-1">
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="email">Email</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </div>
                                    <input readonly value="{{ $employee->email }}" type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="Phone">Phone</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">local_phone</i>
                                    </div>
                                    <input readonly value="{{ $employee->phone }}" type="text" class="form-control" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <div class="input-group input-group--inline">
                                <div class="input-group-addon">
                                    <i class="material-icons">location_on</i>
                                </div>
                                <input readonly value="{{ $employee->address }}" type="text" class="form-control" name="address">
                            </div>
                        </div>
                        <hr class="opacity-0 my-1">
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="national_id">National Id Number</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">credit_card</i>
                                    </div>
                                    <input readonly value="{{ $employee->national_id }}" type="text" class="form-control" name="national_id">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="next_of_kin">Next of Kin</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">nature_people</i>
                                    </div>
                                    <input readonly value="{{ $employee->next_of_kin }}" type="text" class="form-control" name="next_of_kin">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="engagement_date">Engagement Date</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </div>
                                    <input readonly value="{{ $employee->engagement_date }}" type="text" class="form-control" name="engagement_date">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="termination_date">Termination Date</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </div>
                                    <input readonly value="{{ $employee->termination_date }}" type="text" class="form-control" name="termination_date">
                                </div>
                            </div>
                        </div>
                        <hr class="opacity-0 my-1">
                        <div class="form-group">
                            <label for="employment_history">Employeement History</label>
                            <div class="input-group input-group--inline">
                                <textarea  readonly value="{{ $employee->employment_history }}" class="form-control" name="employment_history"></textarea>
                            </div>
                        </div>
                        <hr class="opacity-0 my-1">
                        <div class="form-group px-1">
                            <label for="departments" class="font-weight-bold">Employee Department(s)</label>
                            <hr class="my-2">
                            <div class="input-group input-group--inline">
                                @foreach($employee->departments as $department)
                                    <b class="mr-5">{{ $department->name }}{{ $loop->last ? "": ", " }}</b>
                                @endforeach
                            </div>
                        </div>
                        <hr class="opacity-0 my-1">
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mt-lg-3 mr-1">
                    <div class="card-header">
                        <h4 class="card-title">National Id</h4>
                    </div>
                    <div class="card-body text-center">
                        <img style="max-width: 50%" src="{{ $employee->nationalIdImage() }}" alt="" class="img-fluid">
                        <hr class="my-1">
                        <div>
                            <button wire:click="changeNationalIdImage" class="btn btn-white btn-sm">Re-upload ID</button>
                        </div>
                    </div>

                </div>
                <div class="card mt-2 mr-1">
                    <div class="card-header">
                        <h4 class="card-title">Contract Document</h4>
                    </div>
                    <div class="card-body text-center">
                        @if(strlen($employee->contract))
                            <i class="material-icons">picture_as_pdf</i>
                            <hr class="my-1">
                            <div>
                                <a href="{{ Storage::url($employee->contract) }}" target="_blank" class="btn btn-white btn-sm">Download Contract</a> <br>
                                <button wire:click="changeContract" class="btn btn-white mt-2 btn-sm">Re-upload Contact</button>
                            </div>
                        @else
                            <div>
                                <button wire:click="changeContract" class="btn btn-white btn-sm">Upload Contact Document</button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="card-title font-weight-bold">Meta Data</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>Updated</span>
                            <span>{{ $employee->updated_at->diffForHumans() }}</span>
                        </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>Created</span>
                            <span>{{ $employee->created_at->diffForHumans() }}</span>
                        </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>Added By</span>
                            <span>{{ $employee->adder->getFullName() }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
