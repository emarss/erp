@include("includes.loading_modal")

<div class="container-fluid" wire:loading.remove>
    <div class="col mb-4">
        <div class="row py-4 bg-white">
            <div class="col-lg-6">
                <div class="media media-user-info align-items-center">
                    <img src="{{ auth()->user()->avatar() }}" class="img-fluid rounded-circle mr-2" width="60"
                        alt="">
                    <div class="media-body lh-1">
                        <p class="h4 m-0">{{ auth()->user()->getFullName() }}</p>
                        <p class="text-muted mb-0">{{ auth()->user()->profile->affiliation }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-md-flex align-items-center justify-content-end">
                <button wire:click="editDetails" class="btn btn-primary btn-sm mr-1">Edit Details</button>
                <button wire:click="editProfile" class="btn btn-primary btn-sm">Edit Profile</button>
            </div>
        </div>
    </div>

    <ul class="nav nav-pills mb-2" id="accountTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active show" id="basic-tab" data-toggle="tab" href="#basic" role="tab"
                aria-controls="basic" aria-selected="true">Basic Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                aria-controls="profile" aria-selected="false">Profile</a>
        </li>
    </ul>
    <div class="tab-content" id="accountTabsContent">
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
                                                value="{{ auth()->user()->first_name }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="middle_name">Middle Name</label>
                                        <div class="input-group input-group--inline">
                                            <div class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </div>
                                            <input readonly type="text" class="form-control" name="middle_name"
                                                value="{{ auth()->user()->middle_name }}">
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
                                            value="{{ auth()->user()->last_name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </div>
                                        <input readonly type="email" class="form-control" name="email"
                                            value="{{ auth()->user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">extension</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="role"
                                            value="{{ ucfirst(auth()->user()->role) }}">
                                    </div>
                                </div>
                            </form>
                            <button wire:click="editDetails" class="btn btn-sm btn-primary">
                                Edit Details
                            </button>
                            <button wire:click="editEmail" class="btn btn-sm btn-primary">
                                Edit Email
                            </button>
                            <button wire:click="editPassword" class="btn btn-sm btn-primary">
                                Edit Password
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
                            @foreach(auth()->user()->departments as $department)
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
                                <span>{{ auth()->user()->updated_at->diffForHumans() }}</span>
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                <span>Created</span>
                                <span>{{ auth()->user()->created_at->diffForHumans() }}</span>
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
                                            value="{{ auth()->user()->profile->affiliation }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="national_id">National Id</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">credit_card</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="national_id"
                                            value="{{ auth()->user()->profile->national_id }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">account_box</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="phone"
                                            value="{{ auth()->user()->profile->phone }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="next_of_kin">Next of Kin</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">nature_people</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="next_of_kin"
                                            value="{{ auth()->user()->profile->next_of_kin }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">location_city</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="address"
                                            value="{{ auth()->user()->profile->address }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sex">Sec</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">group</i>
                                        </div>
                                        <input readonly type="text" class="form-control" name="sex"
                                            value="{{ ucfirst(auth()->user()->profile->sex) }}">
                                    </div>
                                </div>
                            </form>
                            <button wire:click="editProfile" class="btn btn-sm btn-primary">Edit Profile</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Avatar</h4>
                        </div>
                        <div class="card-body text-center">
                            <img style="max-width: 50%" src="{{ auth()->user()->avatar() }}" alt="" class="img-fluid rounded-circle">
                            <hr class="my-1">
                            <div>
                                <button wire:click="changeAvatar" class="btn btn-white btn-sm">Change Avatar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">National Id</h4>
                        </div>
                        <div class="card-body text-center">
                            <img style="max-width: 50%" src="{{ auth()->user()->nationalIdImage() }}" alt="" class="img-fluid">
                            <hr class="my-1">
                            <div>
                                <button wire:click="changeNationalIdImage" class="btn btn-white btn-sm">Re-upload ID</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
