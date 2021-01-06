<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->
</div>@include("includes.loading_modal")

<div class="container-fluid" wire:loading.remove>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                {{ $user->getFullName() }}
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
                <button wire:click="edit({{ $user->id }})" class="btn btn-sm btn-primary float-right mr-2">Edit</button>
                <button wire:click="delete({{ $user->id }})" class="btn btn-sm btn-danger float-right mr-2">Delete</button>
            </h4>
        </div>
    </div>

    <ul class="nav nav-pills mb-2 px-1" id="accountTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active show" id="basic-tab" data-toggle="tab" href="#basic" role="tab"
                aria-controls="basic" aria-selected="true">Basic Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">Profile</a>
        </li>
    </ul>
    <div class="tab-content px-1" id="accountTabsContent">
        <div class="tab-pane fade active show" id="basic" role="tabpanel" aria-labelledby="basic-tab">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card card-account">
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label for="first_name">First Name</label>
                                        <div class="input-group input-group--inline">
                                            <div class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </div>
                                            <input readonly type="text" class="form-control" name="first_name"
                                                value="{{ $user->first_name }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="middle_name">Middle Name</label>
                                        <div class="input-group input-group--inline">
                                            <div class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </div>
                                            <input readonly type="text" class="form-control" name="middle_name"
                                                value="{{ $user->middle_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="last_name"
                                            value="{{ $user->last_name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </div>
                                        <input readonly type="email" class="form-control" name="email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">extension</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="role"
                                            value="{{ ucfirst($user->role) }}">
                                    </div>
                                </div>
                            </form>
                            <button wire:click="edit({{ $user->id }})" class="btn btn-sm btn-primary">
                                Edit Details
                            </button>
                            <button wire:click="changeUserPassword({{ $user->id }})" class="btn btn-sm btn-primary">
                                Change Password
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h4 class="card-title font-weight-bold">Departments</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($user->departments as $department)
                            <li class="list-group-item list-group-item-action">
                                <span>{{ $department->name }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold">Meta Data</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                <span>Updated</span>
                                <span>{{ $user->updated_at->diffForHumans() }}</span>
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                <span>Created</span>
                                <span>{{ $user->created_at->diffForHumans() }}</span>
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                <span>Added By</span>
                                <span>{{ $user->adder->getFullName() }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="affiliation">Affiliation</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">domain</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="affiliation"
                                            value="{{ $user->profile->affiliation }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="national_id">National Id</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">credit_card</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="national_id"
                                            value="{{ $user->profile->national_id }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">account_box</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="phone"
                                            value="{{ $user->profile->phone }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="next_of_kin">Next of Kin</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">nature_people</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="next_of_kin"
                                            value="{{ $user->profile->next_of_kin }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">location_city</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="address"
                                            value="{{ $user->profile->address }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sex">Sec</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">group</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="sex"
                                            value="{{ ucfirst($user->profile->sex) }}">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Avatar</h4>
                        </div>
                        <div class="card-body text-center">
                            <img style="max-width: 50%" src="{{ $user->avatar() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">National Id</h4>
                        </div>
                        <div class="card-body text-center">
                            <img style="max-width: 50%" src="{{ $user->nationalIdImage() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
