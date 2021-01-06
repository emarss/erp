<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->
</div>@include("includes.loading_modal")

<div class="container-fluid"  wire:loading.remove>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Users List
                <button class="btn btn-primary btn-sm float-right" wire:click="create">Add New</button>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="data-table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="">#</th>
                            <th scope="col" class="">Name</th>
                            <th scope="col" class="">Email</th>
                            <th scope="col" class="">Role</th>
                            <th scope="col" class="">Status</th>
                            <th scope="col" class="">Created At</th>
                            <th scope="col" class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td> {{ $user->id }} </th>
                                <td> {{ $user->getFullName() }} </th>
                                <td> {{ $user->email }} </th>
                                <td> {{ Str::ucfirst($user->role) }} </th>
                                <td> {{ $user->status ? "Active" : "Not Active" }} </th>
                                <td> {{ $user->created_at->diffForHumans() }} </th>
                                <td class="align-middle text-right">
                                    <button wire:click="show({{ $user->id }})" class="btn btn-sm btn-primary">Show</button>
                                    <button wire:click="edit({{ $user->id }})" class="btn btn-sm btn-primary">Edit</button>
                                    <button wire:click="delete({{ $user->id }})" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No users found. Click <a wire:click="create" href="#">this link</a> to create new.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
