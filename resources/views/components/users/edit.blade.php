<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Edit User
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
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
                            <input wire:model="first_name" type="text" class="form-control" name="first_name"
                                placeholder="First Name">
                        </div>
                        @error('first_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="middle_name">Middle Name</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <input wire:model="middle_name" type="text" class="form-control" name="middle_name"
                                placeholder="Middle Name">
                        </div>
                        @error('middle_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">person</i>
                        </div>
                        <input wire:model="last_name" type="text" class="form-control" name="last_name"
                            placeholder="Last Name">
                    </div>
                    @error('last_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <hr class="opacity-0 my-1">
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">email</i>
                        </div>
                        <input wire:model="email" type="text" class="form-control" name="email"
                            placeholder="Email Address">
                    </div>
                    @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <hr class="opacity-0 my-1">
                <div class="form-group">
                    <label for="role">Role</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">extension</i>
                        </div>
                        <select wire:model="role" name="role" class="form-control">
                            <option value="">--Select User Role</option>
                            @foreach(\App\Models\UserRole::all() as $role)
                            <option value="{{ ucfirst($role->title) }}">{{ ucfirst($role->title) }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('role') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <hr class="opacity-0 my-1">
                <div class="form-group px-1">
                    <label for="departments" class="font-weight-bold">User Department(s)</label> <hr class="my-2">
                    <div class="input-group input-group--inline">
                        @foreach(\App\Models\Department::all() as $department)
                            <label class="checkbox mr-5"><input type="checkbox" name="departments[]" class="mr-1"  wire:model="departments" value="{{ $department->id }}">{{ $department->name }}</label>
                        @endforeach
                    </div>
                    @error('departments') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <hr class="opacity-0 my-1">
            </form>
            <button class="btn btn-primary btn-sm" wire:click="updateUser">Update</button>
        </div>
    </div>
</div>
