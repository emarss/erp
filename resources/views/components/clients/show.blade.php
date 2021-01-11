<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Client: {{ $client->getFullName() }}
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
                <button wire:click="edit({{ $client->id }})" class="btn btn-sm btn-primary float-right mr-2">Edit</button>
                <button wire:click="delete({{ $client->id }})" class="btn btn-sm btn-danger float-right mr-2">Delete</button>
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
                                    <input readonly value="{{ $client->first_name }}" type="text" class="form-control" name="first_name">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="middle_name">Middle Name</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </div>
                                    <input readonly value="{{ $client->middle_name }}" type="text" class="form-control" name="middle_name">
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
                                    <input readonly value="{{ $client->last_name }}" type="text" class="form-control" name="last_name">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="sex">Gender (Sex)</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </div>
                                    <input readonly value="{{ Str::ucfirst($client->sex) }}" type="text" class="form-control" name="email">
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
                                    <input readonly value="{{ $client->email }}" type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="Phone">Phone</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">local_phone</i>
                                    </div>
                                    <input readonly value="{{ $client->phone }}" type="text" class="form-control" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <div class="input-group input-group--inline">
                                <div class="input-group-addon">
                                    <i class="material-icons">location_on</i>
                                </div>
                                <input readonly value="{{ $client->address }}" type="text" class="form-control" name="address">
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
                                    <input readonly value="{{ $client->national_id }}" type="text" class="form-control" name="national_id">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="next_of_kin">Next of Kin</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">nature_people</i>
                                    </div>
                                    <input readonly value="{{ $client->next_of_kin }}" type="text" class="form-control" name="next_of_kin">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card mt-lg-3 mr-1">
                    <div class="card-header">
                        <h4 class="card-title">National Id</h4>
                    </div>
                    <div class="card-body text-center">
                        <img style="max-width: 50%" src="{{ $client->nationalIdImage() }}" alt="" class="img-fluid">
                        <hr class="my-1">
                        <div>
                            <button wire:click="changeNationalIdImage" class="btn btn-white btn-sm">Re-upload ID</button>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="card-title font-weight-bold">Meta Data</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>Updated</span>
                            <span>{{ $client->updated_at->diffForHumans() }}</span>
                        </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>Created</span>
                            <span>{{ $client->created_at->diffForHumans() }}</span>
                        </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>Added By</span>
                            <span>{{ $client->adder->getFullName() }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
